<?php 
$r=$_GET["s1"];
$ppsayısı=3.14;
$psayısı=3.14;
function hacim($pi,$rr){
    $rkup=$rr*$rr*$rr;
    $v=(4/3)*$pi*$rkup;
    return $v;
}
function yuzey($pi,$rr){
    $rkare=$rr*$rr;
    $a=4*$pi*$rkare;
    return $a;
}
echo hacim($ppsayısı,$r); 
echo"<hr>";
echo yuzey($psayısı,$r);

?>