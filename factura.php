<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/matricula.css" >
    <title>Factura realizada!</title>
</head>
<body>

    <?php

    if($_POST){
        $nom = $_POST["nombre"];
        $ape = $_POST["apellido"];
        $dic = $_POST["direccion"];
        $telef = $_POST["telefono"];
        $tdoc = $_POST["tdocumento"];
        $ndoc = $_POST["numDocumento"];
        $edad = $_POST["edad"];
        $grado = $_POST["grado"];
        $gen = $_POST["genero"];
        $beca = $_POST["beca"];
        $becado = "";
        $costo = 0;
        $precios = [
            "1" => 250.00, 
            "2" => 250.00, 
            "3" => 250.00, 
            "4" => 250.00, 
            "5" => 250.00, 
            "6" => 250.00, 
            "7" => 350.00, 
            "8" => 350.00, 
            "9" => 350.00, 
            "10" => 350.00, 
            "11" => 350.00
        ];

        $precio = $precios[$grado];
        
        if ($beca == "si"){
            $costo = $precio - ($precio*0.25);
            $becado = "<b>Usuario becado:</b> Descuento de matricula 25%. (". $precio .")";

        }else{
            $costo = $precio;
        }
    }
    ?>

    <fieldset>
        <legend><h2>FACTURA</h2></legend>

        <b>Estudiante: </b> <?php echo $nom ." " .$ape ?> <br>
        <b>Tipo de documento: </b> <?php echo $tdoc ." #" .$ndoc ?> <br>
        <b>Genero: </b> <?php echo $gen ?> <br>
        <b>Grado: </b> <?php echo $grado ?> <br>

        <?php
        if ($becado != ""){
            echo $becado;
        } 
        ?> <br>

        <p></p>
        <b>Total a pagar: </b> <?php echo $costo?> <br>
        <a href="welcome.php">regresar</a>
        <input type ="button" value= "Imprimir" onclick="window.print()">
    </fieldset>

 
    

</body>
</html>