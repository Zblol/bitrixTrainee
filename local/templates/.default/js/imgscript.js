


BX.ready(function (){

    $(form).submit(function (e){
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success:function (data){
                alert("file uploaded");
            }
        });
    });
});