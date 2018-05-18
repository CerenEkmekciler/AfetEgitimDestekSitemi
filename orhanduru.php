####orhan duru sistem tasarlanırken tanımlanmış hocanın adıdır.
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


$sorgu="SELECT kursiyerler.ad,kursiyerler.soyad,dersler.ders_ad FROM kursiyerler,dersler,kursiyer_ders,hocalar,hoca_ders WHERE kursiyerler.kursiyer_id=kursiyer_ders.kursiyer_id and kursiyer_ders.ders_no=dersler.ders_no AND hoca_ders.hoca_no=hocalar.hoca_no AND hoca_ders.ders_no=dersler.ders_no AND hocalar.hoca_no ='1111111112'";
$a=mysqli_query(@$baglanti,$sorgu);
if(mysqli_num_rows($a)>0)
	
{
	while($row=mysqli_fetch_assoc($a))
	{
		echo "Ad: ".$row["ad"]." - Soyad: ".$row["soyad"]." - Ders: ".$row["ders_ad"]."<br>"."<br>";
	}
}
else{
	echo "Kayıt bulunamadı";
}
mysqli_close(@$baglanti);

?>
