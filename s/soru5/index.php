<?php 
$il="rize,ordu,van,muş,bitlis,ankara,istanbul,bursa";
$iller=explode(",",$il);
foreach ($iller as  $value) {
    echo"$value<hr>";
}
$esayısı=count($iller);
echo "Eleman Sayısı=$esayısı";
?>