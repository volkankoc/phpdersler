<?php
 //Dosya okuma yazma oluşturma işlemleri
 $dosyaismi='belgeler/resim/not.txt';
 //explode ile metin / ile parçalanıyor
 $dosya=explode("/",$dosyaismi);

if (file_exists ($dosyaismi )) //belgeler isimli bir dosya yada dizin var mı?
{
    echo "evet $dosya[2] adında bir dosya var";
}
else
{
    echo "hayır $dosya[2] adında bir dosya yok";
}





?>