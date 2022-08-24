<?php 

	if (isset($_GET["page"])){
		$page = $_GET['page'];

		switch($page)
		{
			case "data-siswa":
			include "data_siswa.php";
			break;
		}
	}else{
		include "home.php";
	}



 ?>