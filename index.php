<html>
<style type="text/css">
/*FcstBoxTable01*/
table.FcstBoxTable01{ width:98%; /*border:#8297d6 1px solid;*/ padding:0; margin:0 auto 20px auto; border-collapse:collapse; }
table.FcstBoxTable01 tr{}
table.FcstBoxTable01 thead th{ font-weight:normal; background-color:#FFF187; text-align:center; /*border-bottom:#8297d6 1px solid; border-left:#8297d6 1px solid;*/padding:5px; color:#0086B3; font-weight:bold; font-size:13px;}
table.FcstBoxTable01 tbody th{
font-weight:normal; /*background-color:#edf0f9;*/ text-align:center;
border-top:#8297d6 1px solid; /*border-left:#8297d6 1px solid;*/ padding:5px 5px 5px 10px; color:#0086B3; font-weight:bold;}
table.FcstBoxTable01 td{border-top:#8297d6 1px solid; /*border-left:#8297d6 1px solid;*/ text-align:center;padding:5px 5px 5px 10px; font-family:Verdana, Arial, Helvetica, sans-serif;}
table.FcstBoxTable01 td a{ color:#2f83cb; text-decoration:none;}
table.FcstBoxTable01 td a:hover{ color:#2f83cb; text-decoration:underline;}
</style>
</html>
<?php
/* 
2015-1-27 天氣預報小程式
*/
$url = "http://www.cwb.gov.tw/V7/forecast/taiwan/Taichung_City.htm"; //天氣預報台中
$fp = @fopen($url, "r") or die("超時");
$fc = file_get_contents($url);
eregi("<!-- ##########################################################################################  -->(.*)<!-- ##########################################################################################  -->",$fc,$rg);
$rg[1]=str_replace("src=\"../../symbol/weather/gif/","src=\"http://www.cwb.gov.tw/V7/symbol/weather/gif/",$rg[1]);

echo $rg[1];
?>
