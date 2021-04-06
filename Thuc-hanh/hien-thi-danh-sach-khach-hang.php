<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table{
        border: 1px solid black;
    }
    td,tr{
        border: 1px solid black;
    }
</style>
<body>
<table border="0">
    <tr>
        <td>STT</td>
        <td>Tên </td>
        <td>Ngày SInh</td>
        <td>Địa Chỉ </td>
        <td>Ảnh </td>
    </tr>
</table>
</body>
<?php
    $customList = array(
        "1"=> array("ten"=>"Khoi",
            "ngaysinh"=>"1983-8-20",
            "diachi"=>"langson",
            "anh"=>""),
        "2"=>array("ten"=>"khoii","ngaysinh"=>"7/4/1995",
            )
    );



foreach($customList as  $key=>$value){

    echo "<tr>";
    echo "<td>".$key."</td>";
    echo "<td>".$value['ten']."</td>";
    echo "<td>".$value['ngaysinh']."</td>";
    echo "<td>".$value['diachi']."</td>";
    echo "<td>".$value['hinhanh']."</td>";
    echo "</tr>";
}



?>
</html>