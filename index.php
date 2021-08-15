<?php
  $message = "Hello World!!!!";
  $message = "Good evening!";
  $name = "田中";
  echo "{$message}"." "."{$name} さん!\n\n";


  $a = "合計金額は";
  $a .= 2000;
  $a .= "円です\n";
  echo $a;

  //[123.456] を小数点第一位以下で四捨五入する
  $b = round(123.456, 1);
  echo $b;
?>