<?php 
$d=$_GET["d"];
$y=$_GET["y"];
$puan=$d*10-$y*3;

echo "Toplam Puanınız=$puan";
echo "<hr>";
if ($puan>=60) {
    echo "tebrikler";
}
?>