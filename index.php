<?php
  $message = "Hello World!!!!";
  $message = "Good evening!";
  $name = "田中";
  echo "{$message}"." "."{$name} さん!"."<br/>";


  $a = "合計金額は";
  $a .= 2000;
  $a .= "円です";
  $a .= "<br/>";
  echo $a;

  //[123.456] を小数点第一位以下で四捨五入する
  $b = round(123.456, 1);
  echo $b."<br>";

  $d=1;
  while(checkdate(2, $d, 2021)){
    echo $d."<br>";
    $d++;
  }

  $info["sun"]="Close";
  $info["mon"]="9:00~22:00";
  $info["tue"]="9:00~22:00";
  $info["wed"]="Special Sale! 7:00~24:00";
  $info["thu"]="9:00~22:00";
  $info["fri"]="9:00~22:00";
  $info["sat"]="12:00~20:00";

  echo $info["mon"];

  $ar = array("Tokyo", "Chiba", "Kanagawa");

  foreach($ar as $v){
    echo $v."<br>";
  }

?>