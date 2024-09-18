

<?php
require 'funcs/conexion.php';
require 'funcs/funcs.php';

if (!empty($_POST)) {
  $nombre = $mysqli->real_escape_string($_POST['nombre']);
  $apellido = $mysqli->real_escape_string($_POST['apellido']);
  $direccion = $mysqli->real_escape_string($_POST['direccion']);
  $telefono = $mysqli->real_escape_string($_POST['telefono']);
  $nacionalidad = $mysqli->real_escape_string($_POST['nacionalidad']);
  $tdocumento = $mysqli->real_escape_string($_POST['tdocumento']);
  $Numdocumento = $mysqli->real_escape_string($_POST['Numdocumento']);
  $edad = $mysqli->real_escape_string($_POST['edad']);

  

  registraMatricula($nombre, $apellido, $direccion, $telefono, $nacionalidad, $tdocumento,$Numdocumento,$edad);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar pago</title>

    <link rel="stylesheet" href="css/matricula.css" >
		
</head>
<body>
    
    <fieldset>
        <legend> <h3>FORMULARIO DE MATRICULA</h3></legend>
        
        <form action="factura.php" method="post">
            <H1> FICHA DE MATRICULA </H1>
            <p><h3>Datos del Estudiante<h3></p>
            <p>Nombres:</p>
            <input type="text" name="nombre" required>

            <p>Apellidos:</p>
            <input type="text" name="apellido" required>

            <p>Dirección Domiciliaria:</p>
            <input type="text" name="direccion" required>

            <p>Telefono de Contacto:</p>
            <input type="text" name="telefono" required>

            <p>Nacionalidad:</p>
            <input type="text" name="nacionalidad" required>

            <p>TIPO DE DOCUMENTO:</p>
            <select name="tdocumento" required>
                <option value="DNI">DNI</option>
                <option value="IDALUMNO">Codigo Alumno</option>
                <option value="CODEXTRANJERIA">Pasaporte</option>
            </select>

            <p>Numero de Documento:</p>
            <input type="text" name="numDocumento" required>

            <p>Edad del Estudiante:</p>
            <input type="number" min="0" max="9999999999" name="edad"  required>

            <p>GRADO A CURSAR:</p>
            <select name="grado" required>
                <option value="1">1 PRIMARIA - 250.000</option>
                <option value="2">2 PRIMARIA - 250.000</option>
                <option value="3">3 PRIMARIA - 250.000</option>
                <option value="4">4 PRIMARIA - 250.000</option>
                <option value="5">5 PRIMARIA - 250.000</option>
                <option value="6">6 PRIMARIA - 250.000</option>
                <option value="7">1 SECUNDARIA - 350.000</option>
                <option value="8">2 SECUNDARIA - 350.000</option>
                <option value="9">3 SECUNDARIA - 350.000</option>
                <option value="10">4 SECUNDARIA - 350.000</option>
                <option value="11">5 SECUNDARIA - 350.000</option>
            </select>
            
            <input type="checkbox" id="carrots" name="carrots" value="carrots" checked>

            <p>GENERO:</p>
            <p><input type="radio" name="genero" value="M" required>Masculino
            <input type="radio" name="sexo" value="F">Femenino</p>

            <p>BECAS:</p>
            <p><input type="radio" name="beca" value="si">Sí
            <input type="radio" name="beca" value="no" required>No</p>

            <input type="submit" value="Enviar">
        </form>
    </fieldset>
    
</body>
</html>