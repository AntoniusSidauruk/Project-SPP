<?php  
include "../model/koneksi.php";

$username = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if ($data > 0){
	echo "berhasil";
}else{
	echo "data tidak ada";
	
}

?>