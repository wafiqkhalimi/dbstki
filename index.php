<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>STEMMING</title>
</head>
<body style="background-color:Tomato">
<center><a href="upload.php">Upload</a> /
        <a href="hasil_tokenisasi.php">Hasil Tokenisasi</a> /
        <a href="hitungvektor.php">Hitung Vektor</a> /
		<a href="hitungbobot.php">Hitung Bobot</a> /
		<a href="query.php">Hitung Query Bolean</a> /
		<a href="querytf2.php">Hitung Querytf2</a> /
		<a href="download.php">Download</a> 

<h2>SISTEM TEMU KEMBALI INFORMASI</br></h2>
<h3>PENCARIAN KATA DASAR</h3>
<form method="post" action="">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>

<h4>Muhammad wafiq khalimi / 15.01.53.0138</h4>
<br/>

</body>
</center>
</html>