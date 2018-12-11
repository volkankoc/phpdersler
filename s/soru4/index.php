<?php
$dosya = fopen("meyve.txt", "r");
$sayac=0;
while(!feof($dosya))
{
    $oku=fgets($dosya); 
    echo "$oku<hr>";
    $sayac++;
}
echo "Eleman sayısı=$sayac";
?>
