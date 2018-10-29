<?php
include'connect.php';
//hitung index
//mysqli_query("TRUNCATE TABLE tbvektor");
//ambil setiap DocId dalam tbindex
	//hitung panjang vektor untuk setiap DocId tersebut
	//simpan ke dalam tabel tbvektor
	$resDocId = mysqli_query($conn,"SELECT DISTINCT DocId FROM tbindex") ;
	if($resDocId){
		echo"sukses";
	}else{echo"tidak connect";}
	$num_rows = mysqli_num_rows($resDocId);
	print("Terdapat " . $num_rows . " dokumen yang dihitung panjang vektornya. <br />");
	
	while($rowDocId = mysqli_fetch_array($resDocId)) {
		$docId = $rowDocId['DocId'];
	
		$resVektor = mysqli_query($conn,"SELECT Bobot FROM tbindex WHERE DocId = '$docId'");
		
		//jumlahkan semua bobot kuadrat 
		$panjangVektor = 0;		
		while($rowVektor = mysqli_fetch_array($resVektor)) {
			$panjangVektor = $panjangVektor + $rowVektor['Bobot']  *  $rowVektor['Bobot'];	
		}
		
		//hitung akarnya		
		$panjangVektor = sqrt($panjangVektor);
		
		//masukkan ke dalam tbvektor		
		$resInsertVektor = mysqli_query($conn,"INSERT INTO tbvektor (DocId, Panjang) VALUES ('$docId', $panjangVektor)");	
	} //end while $rowDocId

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hitung Vektor</title>
</head>
<body>
<center><a href="index.php" style="background-color:cyan">Home</center>
</body>
</html>