<?php
require("vt.php");

/*if(!@$baglanti){
	die("Bağlantı başarısız".mysqli_connect_error());
}
else
{
	echo "Bağlantı başarılı<br>";
}*/
$sorgu="SELECT devamsizlik.devamsizlik_sayisi, dersler.ders_ad FROM devamsizlik,kursiyerler,dersler WHERE devamsizlik.kursiyer_id=kursiyerler.kursiyer_id AND devamsizlik.ders_no=dersler.ders_no AND kursiyerler.kursiyer_id='1'";
$a=mysqli_query(@$baglanti,$sorgu);
if(mysqli_num_rows($a)>0)
	
{
	while($row=mysqli_fetch_assoc($a))
	{
		echo "Devamsızlık Sayısı: ".$row["devamsizlik_sayisi"]." - Dersin Adı: ".$row["ders_ad"]."<br>";
	}
}
else{
	echo "Kayıt bulunamadı";
}
mysqli_close(@$baglanti);

?>
