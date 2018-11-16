<?php 
	try{
		// header("content-type: aplication/json");
		// $palabra = $_POST['palabra'];
		// echo $palabra;
		if(!empty($_GET['pal'])){
			$pal = $_GET['pal'];
			$db = new PDO("mysql:host=localhost;dbname=traducir","root","");
			// try{
				foreach ($db->query("SELECT * FROM palabras WHERE ingles='$pal' ") as $value) {
					echo json_encode($value);
			}
			// }catch(){

			// }
		}
	}
	catch(PDOException $e){
		print ("Error: ".$e->getMessage());
	}

?>