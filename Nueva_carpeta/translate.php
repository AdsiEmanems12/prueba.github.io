<?php 
	try{
		// header("content-type: aplication/json");
		// $palabra = $_POST['palabra'];
		// echo $palabra;
		if(!empty($_GET['pal'])){
			$pal = $_GET['pal'];
			$db = new PDO("mysql:host=localhost;dbname=traducir","root","");
			$stmt = $db->prepare("SELECT * FROM palabras WHERE ingles = ? ");
			$stmt->bindParam(1,$pal);
			$stmt->execute();
			// try{
				foreach ( $stmt as $value) {
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