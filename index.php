<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Afet Eğitim Destek Sistemi</title>
<style type="text/css">

.div{
height: 100px;
width: 310px;
background-color: #c62d1f;
color: #fff;
margin-left:510px;
margin-top:80px;
font-family:"Trebuchet MS", Helvetica, sans-serif;
font-size:20;
padding:10px;



}

.div1{
height: 300px;
width: 300px;
background-color: #c62d1f;
color: #fff;
padding:10px;
display: table;
margin:200px;
position: absolute;
top: 50%;
left: 50%;
margin-left: -160px;
margin-top: -70px;
}


#paragraf{
height: 200px;
width: 300px;
background-color: #c62d1f;
color: #fff;
padding:10px;

}


#giris{
	background-color:#ffffff;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #d02718;
	display:inline-block;
	color:#f24537;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:10px 24px;
	margin-left:10px;
	font-family:Arial;
}



#kayit{
	background-color:#ffffff;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #d02718;
	display:inline-block;
	color:#f24537;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:10px 24px;
	margin-left:10px;
	margin-top:15px;
}


	

</style>

</head>
<body>
<form action="login.php" method="POST">
<div class="div" style="text-align:center">
<label>Afet Eğitim Destek Sistemine Hoşgeldiniz</label>
<br><br><label><i>AFET İÇİN EĞİTİMLE BİLİNÇLENELİM!</i><label><br><br>
</div>
<div class="div1">
<div id="paragraf" style="text-align:center">
<br><br><label>Kullanıcı Adı:</label><input type="text" placeholder="Kullanıcı Adınızı Giriniz.." name="kullanici_adi"><br><br>
<br><label>Şifre:</label><input type="password" placeholder="Şifrenizi Giriniz.." name="sifre"><br><br>
<button id="giris">Giriş</button>
<br><br><label><i>Kullanıcı Adınız "....@...." şeklinde olmalıdır!</i></label><br><br>
<input type="button" name="button" id="kayit" value="Yeni Kayıt Talebi" onclick="window.location ='http://localhost:90/ekle.php'"></input>
</div>
</div>
</form>


</body>
</html>
    
