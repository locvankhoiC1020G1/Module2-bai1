<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
form{
    width: 30%;
}
</style>
<body>
<form action="" method="post">

    <fieldset>
        <legend> Từ diển</legend>

        <input type="text" name="search" placeholder=" Nhập từ cần tìm ">
        <input type="submit" name="TÌm ">
    </fieldset>
</form>

<?php

$tudien =array("hello"=>"xinchao","hi"=>"chao","pen"=>"but");
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $searchWord = $_POST["search"];
    $flag = 0;
    foreach($tudien as $word=>$description){
        if($word===$searchWord){
            echo "Từ: ".$word."nghĩa của từ là: ".$description;
            echo"<br>";
            $flag = 1;
        }
    }
if($flag==0){
    echo "Khong tim thay tu";
}
}
?>


</body>
</html>