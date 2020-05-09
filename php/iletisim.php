<?php
  
  error_reporting(0);

  $isim = $_POST['isim'];
  $soyisim = $_POST['soyisim'];
  $cinsiyet = $_POST['cinsiyet'];
  $dogum = $_POST['dogum'];
  $email = $_POST['email'];
  $telefon = $_POST['telefon'];
  $mesaj = $_POST['mesaj'];
  $takim = $_POST['takimTur'];


  
  if (empty($_POST['Cihaz1'])==false) {
  $cihaz1 = $_POST['Cihaz1'];
  }

  if (empty($_POST['Cihaz2'])==false) {
  $cihaz2 = $_POST['Cihaz2'];
  }

  if (empty($_POST['Cihaz3'])==false) {
  $cihaz3 = $_POST['Cihaz3'];
  }
 
 

  echo "<br>";
  echo "isminiz :".$isim."<br>";
  echo "soyisminiz :".$soyisim."<br>";
  echo "cinsiyetiniz :".$cinsiyet."<br>";
  echo "doğum tarihiniz :".$dogum."<br>";
  echo "e-mail adresiniz :".$email."<br>";
  echo "takımınız :".$takim."<br>";
  echo "telefonunuz :".$telefon."<br>";
  echo "mesajınız :".$mesaj."<br>";
 


  if (empty($cihaz1)==false) {
  echo "sitemize girmek için kullandığınız cihazlar : telefon";
  echo "<br>";
  }
  if (empty($cihaz2)==false) {
  echo "sitemize girmek için kullandığınız cihazlar : tablet";
  echo "<br>";
  }
if (empty($cihaz3)==false) {
  echo "sitemize girmek için kullandığınız cihazlar : bilgisayar";
  echo "<br>";
  }

  
    
?>