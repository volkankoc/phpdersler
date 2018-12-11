<?php 
$s1=$_GET["s1"];
$s2=$_GET["s2"];
$sonuc=($s1*10)-$s2*3;
echo $sonuc;
if ($sonuc>=60) {
    echo"tebrikler";
}
?>