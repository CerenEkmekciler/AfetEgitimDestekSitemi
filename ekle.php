<?php 
include("vt.php"); 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Kurs Kayıt İşlemleri</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="form">
<form action="" method="post">
<fieldset>
<legend><h3>Kurs Kayıt Başvurusu</h3></legend>
    <table class="table">
        
        <tr>
            <td>Adınız:</td>
            <td><input type="text" name="ad" class="form-control" ></td>
        </tr>

        <tr>
            <td>Soyadınız:</td>
            <td><textarea name="soyad" class="form-control" ></textarea></td>
        </tr>
		
		 <tr>
            <td>Adresiniz:</td>
            <td><textarea name="adres" class="form-control" ></textarea></td>
        </tr>

		 <tr>
            <td>E-postanız:</td>
            <td><textarea name="mail" class="form-control" ></textarea></td>
        </tr>
		
		 <tr>
            <td>Yaşınız:</td>
            <td><textarea name="yas" class="form-control" ></textarea></td>
        </tr>
		
		 <tr>
            <td>Cinsiyetiniz:</td>
            <td><textarea name="cinsiyet" class="form-control" ></textarea></td>
        </tr>
		

		
        <tr>
            <td></td>
            <td><input class="btn btn-danger"  type="submit" value="Ekle"></td>
        </tr>

    </table>
</fieldset>
</form>


<?php 

if ($_POST) { 

   
    $adi = $_POST['ad']; 
    $soyadi = $_POST['soyad'];
	$adresi= $_POST['adres'];
	$yasi=$_POST['yas'];
	$cinsiyeti=$_POST['cinsiyet'];
	$posta=$_POST['mail'];

    if ($adi<>"" && $soyadi<>"") { 
  
        if ($baglanti->query("INSERT INTO kursiyerler (ad, soyad, adres, yas, cinsiyet, e_posta) VALUES ('$adi','$soyadi','$adresi','$yasi','$cinsiyeti','$posta')")) 
        {
            echo "Bilgileriniz Sistemimize Eklenmiştir.En kısa sürede sizinle iletişime geçilecektir."; 
        }
        else
        {
            echo "Hata oluştu";
        }

    }

}

?>


</div>
</div>
</body>
</html>
