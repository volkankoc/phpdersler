
<?php
//EXPLODE KULLANIMI
//HARFLERİ PARÇALAYIP BELLİ BİR KISMI İLE KELİME ÜRETME
$harfler="K.L.A.M.E.T.O.R.İ";
$parca=explode(".",$harfler);
$s=count($parca);//dizinin eleman sayısını hesaplar
for ($i=0; $i <10 ; $i++) 
{ 

    for ($j=0; $j <5 ; $j++) 
    { 
        echo $parca[rand(0,$s-1)];
    }

    echo "<hr>";
  
}

?>