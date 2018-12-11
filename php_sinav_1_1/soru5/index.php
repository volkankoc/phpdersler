<?php 
$il="rize,ordu,van,muş,bitlis,ankara,İstanbul,bursa";
$parca=explode(",",$il);
$sayac=0;
foreach ($parca as $value) {
    echo "$value<br>";
    $sayac++;
}
echo "Toplam il sayısı=$sayac";
?>