<?php
  
  error_reporting(0);

  $isim = $_POST['kullaniciAdi'];
  $sifre = $_POST['parola'];
  

  
  if ($isim == "g191210013@sakarya.edu.tr" && $sifre=="123") {
  echo "<br>"."Hoşgeldiniz g191210013"."<br>";
  }
  else{
      header('Location: ../giris.html');
  }

  
  
  
    
?>