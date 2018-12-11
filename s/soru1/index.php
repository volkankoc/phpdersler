<?php
$puanlar=array(88,25,36,36,98,60,80,90,100,70,90,50,25,88,69,100);
$sonuc = count($puanlar);
echo "Eleman sayısı=$sonuc";
asort($puanlar);
echo "<hr>";
//ekrana küçükten büyüğe yazdırdı

foreach ($puanlar as $value) {
    echo "$value<hr>";

}
echo "şartlı hali<hr>";
//ekrana 70 den büyük olanları yazdırdı
foreach ($puanlar as $value) {
    if ($value>=70) {
        echo "$value<hr>";
    }
}
?>