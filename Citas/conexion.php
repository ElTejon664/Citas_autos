<?php
try
    {
        $usuario = 'root';
        $contraseña = "";
        $mbd = new PDO('mysql:host=localhost;dbname=cagencia', $usuario, $contraseña);
        //echo "Conexion Exitosa";
    }
    catch (PDOException $e)
    {
        echo "Conexion  no exitosa";
        echo "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>
