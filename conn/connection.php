<?php
try{
$conn = new PDO('mysql:host=localhost; dbname=centroescolarbd', 'root', '');
echo "Conectado correctamente";
} catch(PDOException $e){
   echo "Error: ". $e->getMessage();
   die();
}
?>