<?php 
if ($_SERVER["REQUEST_METHOD"]=="GET") //istek bir get metodu mu
{
    if (isset($_GET["ad"])) //    $_GET["ad"] bu bilgi tanımlımı
    {
        echo $_GET["ad"];;
    }
    else 
    {
        header('Location: index.php'); //anasayfaya yönlendirme
    }

 
}



?>