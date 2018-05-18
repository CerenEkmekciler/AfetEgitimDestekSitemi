<?php
require("vt.php");

/*if(!@$baglanti){
	die("Bağlantı başarısız".mysqli_connect_error());
}
else
{
	echo "Bağlantı başarılı<br>";
}*/
$sorgu="SELECT * FROM kursiyerler";
$a=mysqli_query(@$baglanti,$sorgu);
if(mysqli_num_rows($a)>0)
	
{
	while($row=mysqli_fetch_assoc($a))
	{
		echo "Kursiyer No: ".$row["kursiyer_id"]." - Ad: ".$row["ad"]." - Soyad: ".$row["soyad"]." - Adres: ".$row["adres"]." - Yas: ".$row["yas"]." - Cinsiyet: ".$row["cinsiyet"]." - E_posta: ".$row["e_posta"]."<br>";
	}
}
else{
	echo "Kayıt bulunamadı";
}
mysqli_close(@$baglanti);

?>
