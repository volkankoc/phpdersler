
<?php
//dizi metotları
//dizi sıralama ve ters sıralama
$il=array("rize","muş","van","ankara","çorum","sivas","konya","aydın","zonguldak");
foreach ($il as $value) {
    echo $value; echo "<hr>";
}
$ters=array_reverse($il);
foreach ($ters as $value) {
    echo $value; echo "<hr>";
}

/*
sort($il);
echo "SIRALAMA YAPILDIKTAN SONRA <HR>";
foreach ($il as $value) {
    echo $value; echo "<hr>";
}*/

?>