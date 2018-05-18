<?php
require("vt.php");

/*if(!@$baglanti){
	die("Bağlantı başarısız".mysqli_connect_error());
}
else
{
	echo "Bağlantı başarılı<br>";
}*/
$sorgu="SELECT dersler.ders_ad ,dersler.ders_fiyat , hocalar.hoca_ad, hocalar.hoca_soyad FROM dersler,hocalar,hoca_ders WHERE dersler.ders_no=hoca_ders.ders_no AND hocalar.hoca_no=hoca_ders.hoca_no";
$a=mysqli_query(@$baglanti,$sorgu);
if(mysqli_num_rows($a)>0)
	
{
	while($row=mysqli_fetch_assoc($a))
	{
		echo "Dersin Adı: ".$row["ders_ad"]." - Ders Ücretleri: ".$row["ders_fiyat"]." - Dersi Verecek Hocanın Adı: ".$row["hoca_ad"]." - Soyadı: ".$row["hoca_soyad"]."<br>";
	}
}
else{
	echo "Kayıt bulunamadı";
}
mysqli_close(@$baglanti);

?>
