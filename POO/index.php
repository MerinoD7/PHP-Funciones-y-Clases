<?php 
    require "ejemplo2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registro de Empleado</h1>
    <form action="" method="POST">
        <label for="">Ingrese su nombre completo</label>
        <input type="text" name="nombre"><br>
        <label for="">Direccion</label>
        <input type="text" name="direccion"><br>
        <label for="">Telefono</label>
        <input type="text" name="telefono"><br>
        <label for="">Sueldo</label>
        <input type="text" name="sueldo"><br>
        <input type="submit" value="Registrar">
    </form>
    <?php
        if(isset($_POST['nombre'], $_POST['direccion'],$_POST['telefono'],$_POST['sueldo'])){
            $nombre = $_POST['nombre'];
            $empleado = new Empleado($nombre, $_POST['direccion'],$_POST['telefono'],$_POST['sueldo']);
            echo $empleado->imprimirDatos();
            echo "<br>";
            echo $empleado->calcularSueldo();
        }
        
    ?>
</body>
</html>