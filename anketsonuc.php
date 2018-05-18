<?php
require("vt.php");

/*if(!@$baglanti){
	die("Bağlantı başarısız".mysqli_connect_error());
}
else
{
	echo "Bağlantı başarılı<br>";
}*/
$sorgu="SELECT kursiyerler.ad,kursiyerler.soyad,anket.cevap_1 FROM kursiyerler,anket WHERE anket.kursiyer_id=kursiyerler.kursiyer_id ";
$a=mysqli_query(@$baglanti,$sorgu);
if(mysqli_num_rows($a)>0)
	
{
	while($row=mysqli_fetch_assoc($a))
	{
		echo "Kursiyer Ad: ".$row["ad"]." - Soyad: ".$row["soyad"]." - Cevap: ".$row["cevap_1"]."<br>"."<br>";
	}
}
else{
	echo "Kayıt bulunamadı";
}
mysqli_close(@$baglanti);

?>
