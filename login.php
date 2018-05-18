<?php
 
include("ayar.php");
 
session_start();
ob_start();
 
 
 
if(($_POST["kullanici_adi"]==$user) && ($_POST["sifre"]==$pass)){
 
//eğer bilgiler doğruysa login ismi verdiğimiz session kaydını yapıyoruz.ve session kaydını kullanıcı adıyla şifremize eşitliyoruz.
 
$_SESSION["login"] = "true";
$_SESSION["kullanici_adi"] = $user;
$_SESSION["sifre"] = $pass;
 
header("Location:admin.php");

}elseif(($_POST["kullanici_adi"]==$username) && ($_POST["sifre"]==$password)){
	
	$_SESSION["login"] = "true";
	$_SESSION["kullanici_adi"] = $username;
	$_SESSION["sifre"] = $password;
	
header("Location:hoca.php");

}elseif(($_POST["kullanici_adi"]==$kullanici) && ($_POST["sifre"]==$sifre)){
	
	$_SESSION["login"] = "true";
	$_SESSION["kullanici_adi"] = $kullanici;
	$_SESSION["sifre"] = $sifre;
	
header("Location:kullanici.php");
	


	
}else{
 
 
echo "Kullanıcı adı veya Şifre Yanlış. Giriş Formuna Yönlendiriyoruz.";
 
header("Refresh: 2; url=index.php");
 
}
 
ob_end_flush();
 
?>
