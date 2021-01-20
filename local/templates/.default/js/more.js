BX.ready(function () {

    $(document).on('click', '.load_more', function () {

        let targetContainer = $('.catalog'),
            url = $('.load_more').attr('data-url');

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function (data) {

                    $('.load_more').remove();

                    let elements = $(data).find('.catalog__item'),
                        pagination = $(data).find('.load_more');

                    targetContainer.prepend(elements);
                    targetContainer.prepend(pagination);
                    window.addEventListener('scroll', checkScroll);
                }
            })
        }
    });

    const catalogItem = document.querySelectorAll('.catalog__item');

    function checkScroll() {
        catalogItem.forEach((item) => {
            const id = item.querySelector('.product_id').innerHTML;
            if (document.documentElement.scrollTop === (document.documentElement.scrollTop + item.getBoundingClientRect().height)
                - item.getBoundingClientRect().height) {

                //ajax here
                $.ajax({
                    type: "POST",
                    url: '/admin/rand_product.php',
                    data: {"ID": id},
                    success: function (data) {

                    }


                });

                console.log(id);


            }
            window.removeEventListener('scroll', checkScroll);
        });
    }

    window.addEventListener('scroll', checkScroll);


});