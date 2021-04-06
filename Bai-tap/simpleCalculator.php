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
<form action="displaySimpleCalculator.php" method="post">
    <fieldset>
        <legend>
            Máy tính đơn giản
        </legend>
        <input type="number" name="firstNUmber"><br>
        <input type="number" name="secondNUmber"><br>
        <select name="calculator"><br>
            <option name="cong" value="cong">Cộng</option>
            <option name="tru" value="tru">Trừ</option>
            <option name="nhan" value="nhan">Nhân</option>
            <option name="chia" value="chia">Chia</option>
        </select>
        <input type="submit" value="Calculate">
    </fieldset>
</form>
</body>

</html>