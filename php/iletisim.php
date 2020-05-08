<?php
  
  $isim = $_POST['isim'];
  $soyisim = $_POST['soyisim'];
  $cinsiyet = $_POST['cinsiyet'];
  $dogum = $_POST['dogum'];
  $email = $_POST['email'];
  $telefon = $_POST['telefon'];
  $mesaj = $_POST['mesaj'];


  
  if (empty($_POST['Cihaz1'])==false) {
  $cihaz1 = $_POST['Cihaz1'];
  }

  if (empty($_POST['Cihaz2'])==false) {
  $cihaz2 = $_POST['Cihaz2'];
  }

  if (empty($_POST['Cihaz3'])==false) {
  $cihaz3 = $_POST['Cihaz3'];
  }
  if (empty($_POST['Takim1'])==false) {
  $takim1 = $_POST['Takim1'];
  }
if (empty($_POST['Takim2'])==false) {
  $takim2 = $_POST['Takim2'];
  }
if (empty($_POST['Takim3'])==false) {
  $takim3 = $_POST['Takim3'];
  }
if (empty($_POST['Takim4'])==false) {
  $takim4 = $_POST['Takim4'];
  }
 

  
  echo "isminiz :".$isim."<br>";
  echo "soyisminiz :".$soyisim."<br>";
  echo "doğum tarihiniz :".$dogum."<br>";
  echo "e-mail adresiniz :".$email."<br>";
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
if (empty($takim1)==false) {
  echo "takımınız :".$takim1;
  echo "<br>";
  }
if (empty($takim2)==false) {
  echo "takımınız :".$takim2;
  echo "<br>";
  }
if (empty($takim3)==false) {
  echo "takımınız :".$takim3;
  echo "<br>";
  }
if (empty($takim4)==false) {
  echo "takımınız :".$takim4;
  echo "<br>";
  }
  
    
?>