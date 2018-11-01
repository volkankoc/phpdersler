<?php

$dosya=fopen("bilgi.txt","r");
//bilgi.txt dosyasını okuma için aç
$sayac=0;
while(!feof($dosya)) //dosyayın sonuna kadar oku
{
    $oku=fgets($dosya); //bir satır oku
   if (trim($oku)!="") //okuğun satırdaki boşlukları al ve boş değilse say?
        {
            $sayac++;
        }
}

fclose($dosya);//dosyayı kapat
echo "toplam=$sayac kadar kayıt bulundu.";
?>