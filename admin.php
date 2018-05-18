<?php
 
include("ayar.php");
session_start();
 
/*eğer login session kaydı yapılmadan yani giriş yapmadan admin.php sayfamıza erişmek isterlerse buna engel oluyoruz.
 
if(!isset($_SESSION["login"])){
 
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";

}else {
	
	echo "Admin sayfası<br>";
	
}*/
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Afet Eğitim Destek Sistemi</title>
<style type="text/css">
#buton2{
	

	background-color:#ffffff;
	color:#f24537;
	font-family:Arial;
	font-size:12px;
	font-weight:bold;
	padding:10px 24px;
	font-family:Arial;
	margin-left:870px;
}

#buton{
	

	background-color:#ffffff;
	color:#f24537;
	font-family:Arial;
	font-size:12px;
	font-weight:bold;
	padding:10px 24px;
	margin:20px;
	font-family:Arial;
	margin-top:10px;
	margin-left:900px;
}

#div{
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
	margin-left:2px;
	font-family:Arial;
	height:850px;
	width:1000px;
}



.div1{
	background-color:#ffffff;
	color:#f24537;
	font-family:Arial;
	font-size:12px;
	font-weight:bold;
	padding:10px 24px;
	margin:20px;
	font-family:Arial;
	margin-top:60px;
	margin-left:50px;
	
	
}




</style>

</head>
<body>
<div id="div">
<input type="button" name="button" id="buton" value="Çıkış Yap" onclick="window.location ='http://localhost:90/logout.php'"></input><br><br>
<input type="button" name="button" id="buton2" value="Anket Sonuçları" onclick="window.location ='http://localhost:90/anketsonuc.php'"></input>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dersler', 'Toplam Kursiyer Sayısı(kişi)', 'Dersi Tercih Eden Kursiyer Sayısı(kişi)', 'Ders Ücreti (TL)'],
          ['Acil Durum Bİlgisi Ve Yönetimine Giriş', 20, 14, 250],
          ['Afet Senaryosu ve Tatbikatlar', 20, 12, 500],
          ['Oyunlaştırılmış Afet Eğitimleri', 20, 5, 215],
		  ['Özel Gereksinimli Bireyler İçin Acil Durum Ve Afet Yönetimi', 20, 10, 275],
		  ['Temel İlk Yardım Bilgisi', 20, 13, 325],
		  ['Afet Risk Azaltma Politikaları', 20, 11, 300],
		  ['Çocuklar için Afet Bilinci Eğitimi', 20, 15, 275]
        ]);

        var options = {
          chart: {
            title: 'Kurs Katılım Oranları',
			
            
          },
          bars: 'horizontal'
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
  
  <div class="div1">
<input type="button" name="button" class="div1" value="Kursiyerleri Görüntüle" onclick="window.location ='http://localhost:90/kisiler.php'"></input>
<input type="button" name="button" class="div1" value="Öğrenci Ders Devam Kontrol" onclick="window.location ='http://localhost:90/toplamdevamsizlik.php'"></input>
<input type="button" name="button" class="div1" value="Kurs Fiyatları" onclick="window.location ='http://localhost:90/fiyat.php'"></input><br><br>



  
  </body>
  
</html>
</div>

</div>
</body>
</html>
