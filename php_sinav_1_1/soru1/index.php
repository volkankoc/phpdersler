<?php
$puanlar=array(88,25,36,36,98,60,80,90,100,70,90,50,25,88,69,100);
echo "eleman sayısı=".count($puanlar);
echo "<hr>";
$say=0;
foreach ($puanlar as $value) {
    if ($value>=70) 
    {
        $say++;
    }
}
echo "70 üstü not sayısı=".$say;
echo "<hr>";
sort($puanlar);
foreach ($puanlar as $value) 
        echo "$value<br>";
  
?>