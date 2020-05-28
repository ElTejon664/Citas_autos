<?php

$taller = $_POST['taller'];
$servicio = $_POST['servicio'];
$ano = $_POST['ano'];
$modelo = $_POST['modelo'];
$nombre_cliente = $_POST['nombre_cliente'];
$apellido_cliente = $_POST['apellido_cliente'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$telefono = $_POST['telefono'];
$tipotel = $_POST['tipotel'];
$email = $_POST['email'];
$valet = $_POST['valet'];
$comentario= $_POST['comentario'];

require('conexion.php');
extract($_REQUEST);
try
{
if ($valet=='on'){

    $sqlCitas = "INSERT INTO cita (Taller_idTaller,Servicio_idServicio,Ano_idAno,Modelo_idModelo,
    Nombre_cliente,Apellido_cliente,Cliente_Telefono,Cliente_Tel_Tipo,Cliente_Correo,Cliente_Auto_Uso,
    Cliente_Comentarios,Fecha_idFecha,Hora_idHora) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $mbd->prepare($sqlCitas);
    $stmt->execute([$taller,$servicio,$ano,$modelo,$nombre_cliente,$apellido_cliente,$telefono,
    $tipotel,$email,$valet,$comentario,$fecha,$hora]);
    $mbd = null;
    //var_dump($sqlCitas);

    header('Location:MostrarCitas.php');
}
else{
    $sqlCitas = "INSERT INTO cita (Taller_idTaller,Servicio_idServicio,Ano_idAno,Modelo_idModelo,
    Nombre_cliente,Apellido_cliente,Cliente_Telefono,Cliente_Tel_Tipo,Cliente_Correo,
    Cliente_Comentarios,Fecha_idFecha,Hora_idHora) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $mbd->prepare($sqlCitas);
    $stmt->execute([$taller,$servicio,$ano,$modelo,$nombre_cliente,$apellido_cliente,$telefono,
        $tipotel,$email,$comentario,$fecha,$hora]);
    $mbd = null;
    //var_dump($sqlCitas);

    header('Location:MostrarCitas.php');
}

}
catch (PDOException $e)
{
    echo "Error";
    echo "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
