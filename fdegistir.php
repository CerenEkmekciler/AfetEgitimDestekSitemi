<?php 
include("vt.php");  
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Veritabanı İşlemleri</title>
</head>
<body>
</html>

<?php 
if ($_POST) { 
    
    $ders = $_POST['ders']; 
    $fiyat = $_POST['fiyat'];

    if ($ders<>"" && $fiyat<>"") { 
        
       
        if ($baglanti->query("UPDATE dersler SET ders_fiyat = '$fiyat' WHERE ders_ad = '$ders'")) 
			
		{
            header("location:admin.php"); 
           
        }
        else
        {
            echo "Hata oluştu"; 
        }
		
	}
}

?>
