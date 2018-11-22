<?php

$filename="not.txt";
$mode="a";
$dosya=fopen($filename,$mode);
for ($i=1; $i <=10 ; $i++) 
{ 
    fwrite($dosya,"$i-volkan\n");
}

fclose($dosya);
?>