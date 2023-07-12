#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/words') as $line){
    if(strpos('abc', $line) >= 0) echo $line;// strpos() 関数を使って、文字列 "abc" が含まれる単語を echo "$line"; で表示しなさい。
  } 
?>
