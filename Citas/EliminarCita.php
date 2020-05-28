<?php
require('conexion.php');
extract($_REQUEST);

try
{
    $query = "DELETE from cita where idCita=?";
    $stmt = $mbd->prepare($query);
    $stmt->execute([$idCita]);
    //echo "Cita eliminada correctamente";
    $mbd = null;
    header('Location: MostrarCitas.php');
}
catch (PDOException $e)
{
    echo "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
