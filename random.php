<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Random Sayı Üretme</title>
  </head>
  <body>

<div class="container" >


<div class="row mt-5" align="center">



<?php
 
$dizi[]="";   // Dizi oluşturduk
for($i=0;$i<6;$i++)
 {
  $random_sayi=rand(1,54);    //Random sayı oluşturuyoruz
  if(in_array($random_sayi,$dizi))    //Diziye attığımız random sayının dizinin içinde olup olmadığını kontrol ediyoruz
  {
    $i--;
  }
  else
  {
    $dizi[]=$random_sayi;
  }
 }

  SORT($dizi);   //Sayıları küçükten büyüğe doğru sıralıyoruz(Büyükten küçüğe doğru için RSORT kullanırız)




?>

</div>

</div>

<div class="jumbotron">
  <h1 class="display-4"><?php  //Diziye attığımız sayıları yazdırıyoruz
echo "<b>".$dizi[1]."-".$dizi[2]."-".$dizi[3]."-".$dizi[4]."-".$dizi[5]."-".$dizi[6];  ?></h1>
  
</div>
  </body>
</html>