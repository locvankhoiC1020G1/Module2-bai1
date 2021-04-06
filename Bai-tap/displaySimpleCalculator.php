<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $first = $_POST["firstNUmber"];
    $second = $_POST["secondNUmber"];
    $calculate =$_POST["calculator"];
    switch ($calculate){
        case "cong":
         $result =  $first + $second;
         echo $result;
          break;


        case "tru":
         $result =  $first - $second;
         echo $result;
            break;


        case "nhan":
           $result =  $first * $second;
           echo $result;
            break;


        case "chia":
          $result =  $first / $second;
          echo $result;
            break;

    }
}