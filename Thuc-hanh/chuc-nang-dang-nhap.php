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
    form{
    width: 30%;
    }
</style>
<body>
<form action="" method="post">
    <fieldset>
        <legend>chức năng đăng nhập </legend>
        <input type="text" name="username" size="40" placeholder="Tên đăng nhập "> <br>
        <input type="password" name="password" size="40" placeholder="Mật khẩu "><br>
        <input type="submit" value="Đăng nhập">
    </fieldset>
</form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username==="admin"&& $password==="123"){
        echo "xin chao admin";
    }else{
        echo"sai thong tin";
    }
}
?>
</html>