<?php
require("vt.php");

/*if(!@$baglanti){
	die("Bağlantı başarısız".mysqli_connect_error());
}
else{

echo "Bağlantı başarılı"
}
	*/
	
$sorgu = "SELECT * FROM grafik ";
$a=mysqli_query(@$baglanti,$sorgu);
$results = array();
if(mysqli_num_rows($a)>0){
	while($row = $a->fetch_assoc()){
	$results[] = $row;
}

$bar_chart_data = array();
foreach($results as $result)
{
	$bar_chart_data[] = array($result['utilization'], (int)$result[('used')], (int)$result['free']);
	
	}
	
	$bar_chart_data = json_encode($bar_chart_data);
	
}

mysqli_close(@$baglanti);
?>
