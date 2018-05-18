<?php
require("vt.php");

/*if(!@$baglanti){
	die("Bağlantı başarısız".mysqli_connect_error());
}
else
{
	echo "Bağlantı başarılı<br>";
}*/

$sorgu="SELECT dersler.ders_ad,hocalar.hoca_ad, hocalar.hoca_soyad FROM dersler,kursiyerler,kursiyer_ders,hocalar,hoca_ders WHERE dersler.ders_no=kursiyer_ders.ders_no AND kursiyer_ders.kursiyer_id=kursiyerler.kursiyer_id AND hoca_ders.hoca_no=hocalar.hoca_no AND hoca_ders.ders_no=dersler.ders_no AND kursiyerler.kursiyer_id='1' ";
$a=mysqli_query(@$baglanti,$sorgu);
if(mysqli_num_rows($a)>0)
	
{
	while($row=mysqli_fetch_assoc($a))
	{
	 echo " Aldığınız Dersin Adı: ".$row["ders_ad"]." Dersi Aldığınız Hocanın Adı: ".$row["hoca_ad"]." Soyadı: ".$row["hoca_soyad"]."<br>";
	}
}
else{
	echo "Kayıt bulunamadı";
}
mysqli_close(@$baglanti);

?>
