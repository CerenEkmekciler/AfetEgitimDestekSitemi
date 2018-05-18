<?php
require("vt.php");

/*if(!@$baglanti){
	die("Bağlantı başarısız".mysqli_connect_error());
}
else
{
	echo "Bağlantı başarılı<br>";
}
*/
$sorgu="SELECT kursiyerler.ad, kursiyerler.soyad,dersler.ders_ad , devamsizlik.devamsizlik_sayisi FROM dersler,kursiyerler,kursiyer_ders, devamsizlik WHERE dersler.ders_no=kursiyer_ders.ders_no AND kursiyer_ders.kursiyer_id=kursiyerler.kursiyer_id AND devamsizlik.kursiyer_id=kursiyerler.kursiyer_id AND devamsizlik.ders_no=dersler.ders_no";
$a=mysqli_query(@$baglanti,$sorgu);
if(mysqli_num_rows($a)>0)
	
{
	while($row=mysqli_fetch_assoc($a))
	{
		echo "Devamsızlık Sayısı: ".$row["devamsizlik_sayisi"]." - Dersin Adı: ".$row["ders_ad"]."- Ad: ".$row["ad"]." - Soyad: ".$row["soyad"]."<br>";
	}
}
else{
	echo "Kayıt bulunamadı";
}
mysqli_close(@$baglanti);

?>
