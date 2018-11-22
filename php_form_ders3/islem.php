<?php
$email=$_GET["email"];
$domain=explode("@",$email);

$posta=array("hotmail.com","gmail.com","outlook.com","mynet.com","linuxmail.com");

echo mailkontrol($domain[1],$posta);
/*birinci yol tek tek karşılaştırma
if ($domain[1]=="hotmail.com" || $domain[1]=="gmail.com")
{
    echo "Geçerli adres";
}
else {
    echo "Geçersiz Adres";
}
*/
/*
//İkinci yol dizi üzerinden karşılaştırma
$durum=0;
foreach ($posta as  $deger) 
{
    if ($domain[1]==$deger)  ///benim mail adresim dizideki bir domain ile eşleştimi
    {
      $durum=1;break;
    }
   
}
if ($durum==0) echo "GEÇERSİZ";
*/


//Method yardımıyla karşılaştırma

function mailkontrol($mail,$posta)
{
        
        $durum=0;
        foreach ($posta as  $deger) 
        {
            if ($mail==$deger)  ///benim mail adresim dizideki bir domain ile eşleştimi
            {
            $durum=1;
            break;
            }
        
        }
        if ($durum==0) return "GEÇERSİZ";
}




?>