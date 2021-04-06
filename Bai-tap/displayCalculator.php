<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $tiendautu = $_POST["tiendautu"];
    $laisuat = $_POST["laisuat"];
    $sonam = $_POST["sonam"]
;
$giatrituonglai =  ($tiendautu +($tiendautu *$laisuat)) * $sonam;
echo "Lượng tiền đầu tư ban đầu:".$tiendautu."<br>";
echo "lãi suất:".$laisuat."<br>";
echo "số năm đầu tư: ".$sonam."<br>";
echo "giá trị tương lai".$giatrituonglai;
}

