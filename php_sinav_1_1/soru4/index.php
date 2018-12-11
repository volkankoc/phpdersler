<?php
$dosya=fopen("meyve.txt","r");
//bilgi.txt dosyasını okuma için aç
$sayac=0;
while(!feof($dosya)) //dosyayın sonuna kadar oku
{
    $oku=fgets($dosya); //dosyadan bir satır oku
    //$parcala=explode("/",$oku);//okuduğun satırı "/" ile parçala
    //echo $parcala[2]."<br>"; //son sırada 2. indiste olan numarayı al
    echo "$oku<hr>";
    $sayac++;
    
    
}
echo "Toplam meyve sayısı=$sayac";
fclose($dosya);//dosyayı kapat

?>