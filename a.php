#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/words') as $line){
    if(strpos($line, 'xy') !== false){
      echo "$line"; // strpos() 関数を使って、文字列 "xy" が含まれる単語を echo "$line"; で表示しなさい。
    }
    } 
?>
