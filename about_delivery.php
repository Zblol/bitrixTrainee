<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О доставке");
?>


<script src="//glavpunkt.ru/js/punkts-widget/glavpunkt.js" charset="utf-8"></script>

<a href="#" onclick="glavpunkt.openMap(selectPointDel, optionsPoint); return false;">
  Выбрать пункт выдачи на карте
</a>



<script>

  function selectPointDel(pointInfo) {
   
    const idPoint = pointInfo.id;
    const adrPoint = pointInfo.address;
    
    alert( "ID:  " + idPoint + "\n" + "Address:  " + adrPoint);

  }

  const optionsPoint = {
        defaultCity: 'SPB',
        excludeOperators : ['cdek'],
        onlyCities: ['Санкт-Петербург', 'Новосибирск' ],
}

</script>







<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>