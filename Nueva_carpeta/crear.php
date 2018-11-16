<?php
    try{
        if(!empty($_GET['esp'])){
            $ing =  $_GET['ing'];
            $esp = $_GET['esp'];
            $db = new PDO("mysql:host=localhost;dbname=traducir","root","");
            $stmt = $db->prepare("INSERT INTO palabras(espanol,ingles) VALUES(?,?)");
            $stmt->bindParam(1,$esp);
            $stmt->bindParam(2,$ing);
            $stmt->execute();
            $count = $stmt->rowCount();
            if($count!=0){
                echo "ingresado";

            }else{
                echo "vacio";
            }
        }
    }catch(PDOException $e){
        echo $e->getMessage();      
    }
?>
