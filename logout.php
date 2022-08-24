<?php 
	
	session_start();
	if (session_destroy()){
		echo '<script type="text/javascript">
       window.alert("Anda Keluar Dari Akun Anda, Terimakasih");
         window.location.href="./login.php";
     </script>';
	}


 ?>