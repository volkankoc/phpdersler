<?php 
$r=$_GET["r"];


echo hacimhesap($r);
echo "<hr>";
echo alanhesap($r);

function hacimhesap($r)
{
    $hacim=4/3*3.14*$r*$r*$r;
    return $hacim;
}
function alanhesap($r)
{
    $alan=4*3.14*$r*$r;
    return $alan;
}
?>
