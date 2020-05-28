<?php
require('conexion.php');
extract($_REQUEST);

try
{
    $query = "UPDATE cita set Taller_idTaller=?, Servicio_idServicio=?,
    Ano_idAno=?, Modelo_idModelo=?, Nombre_cliente=?, Apellido_cliente=?, Cliente_Telefono=?,
     Cliente_Correo=?,Cliente_Auto_Uso=?,  Cliente_Comentarios=?, Fecha_idFecha=?, Hora_idHora=?
     where idCita=?";
    $stmt = $mbd->prepare($query);



    $stmt->execute([$taller,$servicio,$ano,$modelo,$nombre_cliente,$apellido_cliente,$telefono,
     $email,$valet,$comentario,$fecha,$hora,$idCita]);
    //echo "Usuario Actualizado Correctamente";
    $mbd = null;
     header('Location: MostrarCitas.php');
// Cuando no mando un valor al Cliente_Auto_Uso que corresponde al $valet me marca un error si uso var_dump, supongo no
    // mando nada por eso hace esa reaccion.

   //var_dump($query);


}
catch (PDOException $e)
{
    echo "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
