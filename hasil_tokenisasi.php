<?php
//membuat koneksi ke database
$host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'db_stbi';  
    
  $konek_db = mysqli_connect($host, $user, $password);    
  $find_db = mysqli_select_db($konek_db,$database) ;
?>


<a href="upload.php" style="background-color:yellow">Upload File</a> or <a href="index.php" style="background-color:yellow">Home</a><br>
<a>Kosongkan Tabel : </a> <a href="empty.php" color="red"> KOSONGKAN </a> 

<center> 
HASIL TOKENISASI DAN STEMMING
<br>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='800'>  
<tr>
    <th> Nama File </th>
    <th> Tokenisasi </th>
    <th> Stemming Porter </th>
    <th> Stemming Nazief Adriani</th>
    
</tr>

<?php  
// Perintah untuk menampilkan data
$host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'db_stbi';  
$konek_db1 = mysqli_connect($host, $user, $password,$database);  
$queri="SELECT * FROM dokumen" ;  //menampikan SEMUA

$hasil=mysqli_query ($konek_db1 ,$queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
    while($data = mysqli_fetch_array($hasil, MYSQLI_ASSOC)){
$id = $data['dokid'];
 echo "    
        <tr>
        <td>".$data['nama_file']."</td>
        <td>".$data['token']."</td>
        <td>".$data['tokenstem']."</td>
        <td>".$data['tokenstem']."</td>
        
        </tr> 
        ";
        
}

?>

</table>