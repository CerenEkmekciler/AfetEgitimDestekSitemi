<?php
require("vt.php");

/*if(!@$baglanti){
	die("Bağlantı başarısız".mysqli_connect_error());
}
else
{
	echo "Bağlantı başarılı";
}*/
?>

<?php
if(isset($_POST['ders'])){

    $cevap = $_POST['ders'];

$sorgu="INSERT INTO `anket` (`soru`, `cevap_1`, `kursiyer_id`) VALUES ( 'Derse Verdiğiniz Ücret, Aldığınız Eğitimi Karşılıyor mu?', '$cevap', '1')";
$a=mysqli_query(@$baglanti,$sorgu); 
}
mysqli_close(@$baglanti);


echo "Cevabınız Sistemimize Eklenmiştir."
?>

