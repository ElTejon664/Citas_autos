<!DOCTYPE html>
<html lang="" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<?php
require('conexion.php');
$query = 'SELECT c.idCita, c.Nombre_Cliente, c.Apellido_Cliente, c.Cliente_Telefono, t.Taller_Nombre, s.Servicio_Nombre, a.Ano_Ano, m.Modelo_Nombre, f.Fecha_fecha, 
h.Hora_Hora, (select mar.Marca_Nombre from marca mar where mar.idMarca=m.Marca_idMarca)as Marca 
FROM cita c, taller t, servicio s, modelo m, ano a, fecha f, hora h where c.Taller_idTaller=t.idTaller and
 s.idServicio=c.Servicio_idServicio and m.idModelo=c.Modelo_idModelo and a.idAno=c.Ano_idAno and f.idFecha=c.Fecha_idFecha 
and h.idHora=c.Hora_idHora ';
$consulta = $mbd->query($query);
?>
<!--COSAS LISTAS DB
NOMBRE
APELLIDO
TALLER
SERVICIO
AÑO
MODELO
FECHA
HORA
MARCA
No puse comentarios porque se me hace un llenado excesivo de información, cuando lo importante es lo del cliente y cita.

-->

<table class="table">
    <th scope="col">ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Teléfono</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Año</th>
    <th>Taller</th>
    <th>Servicio</th>
    <th>Fecha</th>
    <th>Hora</th>
    <th>Acciones</th>
    <?php
    foreach ($consulta as $filas)
    {
        ?>
        <tr>
            <td><?php echo $filas['idCita']; ?></td>
            <td><?php echo $filas['Nombre_Cliente']; ?></td>
            <td><?php echo $filas['Apellido_Cliente']; ?></td>
            <td><?php echo $filas['Cliente_Telefono']; ?></td>
            <td><?php echo $filas['Marca']; ?></td>
            <td><?php echo $filas['Modelo_Nombre']; ?></td>
            <td><?php echo $filas['Ano_Ano']; ?></td>
            <td><?php echo $filas['Taller_Nombre']; ?></td>
            <td><?php echo $filas['Servicio_Nombre']; ?></td>
            <td><?php echo $filas['Fecha_fecha']; ?></td>
            <td><?php echo $filas['Hora_Hora']; ?></td>
            <td><a href="EditarCitaFrontEnd.php?idCita=<?php echo $filas['idCita']; ?>"> Editar</a></td>
             <form action="EliminarNivelPHP.php" method="post">
                 <td><a class="btn btn-outline-danger" href="EliminarCita.php?idCita=<?php echo $filas['idCita']; ?>"> Eliminar</a></td>

                </form>

        </tr>
        <?php
    }
    ?>
</table>
<div class="text-center">
    <a   class="btn btn-dark" href="index.php" role="button">Agregar una nueva cita</a>

</div>
</body>
</html>
