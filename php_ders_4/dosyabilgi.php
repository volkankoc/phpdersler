<?php
for ($i=1; $i <=10 ; $i++) 
{ 
    $dosya="volkan$i.txt"; //her dosya adı farklı olması için for değişkeninden sayı aldık
    //volkan1.txt volkan2.txt volkan3.txt ...... volkan10.txt
    touch($dosya,0777);
    //bu isimli ve yazma yetkili dosya oluştur
    $d=fopen($dosya,"a");
    //dosyayı a modundan okumak ve ard arda yazmak için açtık
    fwrite($d,rand(1,1500));
    //rasgele oluşturduğumuz rakamı açtığımız dosyaya yazdık
    fclose($d);
}

?>