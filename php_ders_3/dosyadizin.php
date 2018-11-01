<?php
 //Dosya okuma yazma oluşturma işlemleri
 /*
 $dosyaismi='dosya.txt';

     //Bu bir dosya mıdır
    if (is_file($dosyaismi))
    {
        echo "$dosyaismi bir dosyadır.";
    }
   //Bu bir dizin midir
    if (is_dir($dosyaismi))
    {
        echo "$dosyaismi bu bir dizindir";
    }

$sonuc=mkdir("belgeler/resim/volkan",0777);

if ($sonuc) {
    echo "dosya oluşturuldu";
}
else 
{
    echo "dosya oluşturulamadı";
}
*/
//10 adet klasör oluşturan program
/*
for ($i=1; $i <=10 ; $i++) 
{ 
    $sayi=rand(0,50);
    mkdir("volkan_$sayi",0777);
}
*/
//5 dizin ve her dizin altına bir dosya oluşturan program
/*
for ($i=1; $i <=5 ; $i++) 
{ 
    mkdir("dosya$i",777);
    touch("dosya$i/bilgiler$i.doc",777);
}
*/

$dosya=fopen("bilgi.txt","r");
//bilgi.txt dosyasını okuma için aç

while(!feof($dosya)) //dosyayın sonuna kadar oku
{
    $oku=fgets($dosya); //dosyadan bir satır oku
    $parcala=explode("/",$oku);//okuduğun satırı "/" ile parçala
    echo $parcala[2]."<br>"; //son sırada 2. indiste olan numarayı al
}

fclose($dosya);//dosyayı kapat






?>