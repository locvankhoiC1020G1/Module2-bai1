<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $description =$_POST["description"];
    $price =$_POST["price"];
    $percent =$_POST["percent"];
    $discountAmount = $price * $percent * 0.01;
    $discountPrice = $price - $discountAmount;
    echo "Giá chiết khấu: ".$discountAmount."<br>";
    echo "giá sản phẩm sau khi chiết khấu :".$discountPrice;

}
