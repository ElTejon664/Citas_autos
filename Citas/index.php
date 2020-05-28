<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=cagencia', 'root', '');
    ?>

    <?php
    require('conexion.php');
    ?>

    <title>Cita de servicio PRODUCCION</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--   VUE   -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <!--   VUE   -->
    <script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


    <style>
        hr.new4 {
            border: 1px solid red;
            position: relative;
            top: 370px;
        }

        hr.new5 {
            border: 1px solid red;
            position: relative;
            top: 490px;
        }

        .M{
            padding-right: -10000px;
           }

        .A1{
            border: 1px solid red;
            border-bottom-color:white ;}

        .A2{
            border: 1px solid red;
            border-top-color:white;
            border-bottom-color: white;}

        .A3{
            border: 1px solid red;
            border-top-color:white;}

    </style>

</head>
<script type="text/javascript">
    function load()
    //load es para cargar, como tenemos el profrile con nav 2, y nav 2 esta con "none" solo se ve que parpadean los pasos pero se ocultan. Como un hide.
    {

        //alert("evento load detectado!");
        var nav2 = document.getElementById("profile");
        nav2.style.display = "none";
        var nav3 = document.getElementById("contact");
        nav3.style.display = "none";
        document.getElementsByClassName('fecha')[0].style.visibility='hidden';
        document.getElementsByClassName('contacto')[0].style.visibility='hidden';
        document.getElementsByClassName('new5')[0].style.visibility='hidden';
        //alert("evento load finalizado");

    }
    window.onload = load;
    function continuar1()
    {

        <!-- alert("continuar1"); -->
        var nav1 = document.getElementById("home");
        nav1.style.display = "none";
        <!-- alert("ocultando home"); -->
        var nav2 = document.getElementById("profile");
        nav2.style.display = "block";
        <!-- alert("mostrando profile"); -->
        document.getElementsByClassName('fecha')[0].style.visibility='visible';
        document.getElementsByClassName('new4')[0].style.visibility='hidden';
        document.getElementsByClassName('new5')[0].style.visibility='visible';
        nav2.click(); // Ocultar los pasos de arriba y desplegar el boton de regresar
        <!-- alert("fin continuar1"); -->
    }
    function continuar2()
    {
        <!-- alert("continuar2"); -->
        var nav2 = document.getElementById("profile");
        nav2.style.display = "none";
        <!-- alert("ocultando profile"); -->
        var nav3 = document.getElementById("contact");
        nav3.style.display = "block";
        <!-- alert("mostrando contact"); -->
        document.getElementsByClassName('contacto')[0].style.visibility='visible';
        document.getElementsByClassName('new5')[0].style.visibility='hidden';
        document.getElementsByClassName('new4')[0].style.visibility='hidden';
        nav3.click();
        <!-- alert("fin continuar2"); -->
    }
    function regresar3()
    {
        <!-- alert("entrando a regresar3"); -->
        var nav2 = document.getElementById("profile");
        nav2.style.display = "block";
        <!-- alert("mostrar profile"); -->
        var nav3 = document.getElementById("contact");
        nav3.style.display = "none";
        <!-- alert("ocultar contact"); -->
        document.getElementsByClassName('contacto')[0].style.visibility='hidden';
        document.getElementsByClassName('new5')[0].style.visibility='visible';

        nav2.click();
        <!-- alert("fin regresar3"); -->

    }
    function regresar2()
    {
        <!-- alert("entrando a regresar2"); -->
        var nav1 = document.getElementById("home");
        nav1.style.display = "block";
        <!-- alert("mostrar profile"); -->
        var nav2 = document.getElementById("profile");
        nav2.style.display = "none";
        <!-- alert("ocultar profile"); -->
        document.getElementsByClassName('fecha')[0].style.visibility='hidden';
        document.getElementsByClassName('new4')[0].style.visibility='visible';
        document.getElementsByClassName('new5')[0].style.visibility='hidden';

        nav1.click();
        <!-- alert("fin regresar3"); -->
    }



</script>




<body>



<div class="container">
    <div class="row mt-4">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <img src="https://hsas.gpoptima.info/assets/img/logo.png" alt="Honda Optima" width="200px" height="28px">
            <h3><i class="fa fa-search-plus"></i> Sistema de edición de citas de servicio</h3>
            <div class="card border-top-0" style="width: 40rem;">
                <div class="card-header">
                    <!-- LISTA DE NAVEGACION -->
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item" role="tablist">
                            <a href="#nav-home"   id="home" data-toggle="tab" role="tab" class="nav-link active"><i class="fa fa-step-forward"></i> Paso 1</a>
                        </li>
                        <li class="nav-item" role="tablist">
                            <a href="#nav-profile" id="profile" data-toggle="tab" role="tab" class="nav-link profile"><i class="fa fa-step-forward"></i> Paso 2</a>
                        </li>
                        <li class="nav-item" role="tablist">
                            <a href="#nav-contact" id="contact" data-toggle="tab" role="tab" class="nav-link contact"><i class="fa fa-check-square"></i> Paso 3</a>
                        </li>
                    </ul>
                </div>



                <div class="card-block tab-content">
                    <!--						elementos del primer formulario-->
                    <!-- Se manda a llamar cada formulario por su id, como id=nav.home, id=profile, id=contact-->
                    <div class="tab-pane fade active show" id="nav-home"  role="tabpanel" aria-labelledby="nav-home-tab">
                        <form action="Introducir_datos_cita.php" id="frm_crear_cita" method="post" onsubmit="return validar();">

                            <fieldset class="form-group"><legend><i class="fa fa-calendar-plus-o"></i> Generar cita de servicio: </legend></fieldset>
                            <div>
                                <div class="form-group">
                                    <label for="ciudad"><i class="fa fa-building-o"></i> Taller</label>

                                    <?php
                                    //Our select statement. This will retrieve the data that we want.
                                    $sql = "SELECT idTaller, Taller_Nombre FROM taller";

                                    //Prepare the select statement.
                                    $stmt = $pdo->prepare($sql);

                                    //Execute the statement.
                                    $stmt->execute();

                                    //Retrieve the rows using fetchAll.
                                    $talleres = $stmt->fetchAll();
                                    ?>


                                    <select id="ciudad" name="taller"   class="form-control taller" onchange="Taller()">
                                        <?php foreach($talleres as $taller): ?>
                                            <option value="<?= $taller['idTaller']; ?>"><?= $taller['Taller_Nombre']; ?></option>
                                        <?php endforeach; ?>


                                    </select>




                                </div>
                                <div class="form-group">
                                    <label for="servicio"><i class="fa fa-wrench"></i> Seleccione un tipo de servicio</label>
                                    <!--                                    Servicios empieza desde 10k y no 5k-->
                                    <?php
                                    //Our select statement. This will retrieve the data that we want.
                                    $sql = "SELECT idServicio, Servicio_Nombre FROM servicio";

                                    //Prepare the select statement.
                                    $stmt = $pdo->prepare($sql);

                                    //Execute the statement.
                                    $stmt->execute();

                                    //Retrieve the rows using fetchAll.
                                    $servicios = $stmt->fetchAll();
                                    ?>
                                    <select name="servicio" id="servicio"  class="form-control" onchange="Servicio()" >
                                        <?php foreach($servicios as $servicio): ?>
                                            <option value="<?= $servicio['idServicio']; ?>"><?= $servicio['Servicio_Nombre']; ?></option>
                                        <?php endforeach; ?>

                                    </select>


                                </div>
                                <div class="form-group">
                                    <label for="marca"><i class="fa fa-info-circle"></i> Marca</label>
                                    <!--                                    //marca solo jala Acura y no Honda-->
                                    <?php
                                    //Our select statement. This will retrieve the data that we want.
                                    $sql = "SELECT idMarca, Marca_Nombre FROM marca";

                                    //Prepare the select statement.
                                    $stmt = $pdo->prepare($sql);

                                    //Execute the statement.
                                    $stmt->execute();

                                    //Retrieve the rows using fetchAll.
                                    $marcas = $stmt->fetchAll();
                                    ?>

                                    <select id="marca" name="marca"  class="form-control" onchange="Marca()" >
                                        <?php foreach($marcas as $marca): ?>
                                            <option value="<?= $marca['idMarca']; ?>"><?= $marca['Marca_Nombre']; ?></option>
                                        <?php endforeach; ?>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="modelo2"><i class="fa fa-car"></i> Modelo</label>
                                    <?php
                                    //Our select statement. This will retrieve the data that we want.
                                    $sql = "SELECT idModelo, Modelo_Nombre FROM modelo";

                                    //Prepare the select statement.
                                    $stmt = $pdo->prepare($sql);

                                    //Execute the statement.
                                    $stmt->execute();

                                    //Retrieve the rows using fetchAll.
                                    $modelos = $stmt->fetchAll();
                                    ?>

                                    <select id="modelo2" name="modelo" class="form-control" onchange="Modelo()" >
                                        <?php foreach($modelos as $modelo): ?>
                                            <option value="<?= $modelo['idModelo']; ?>"><?= $modelo['Modelo_Nombre']; ?></option>
                                        <?php endforeach; ?>

                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="anio"><i class="fa fa-info"></i> Año</label>
                                    <?php
                                    //Our select statement. This will retrieve the data that we want.
                                    $sql = "SELECT idAno, Ano_Ano FROM ano";

                                    //Prepare the select statement.
                                    $stmt = $pdo->prepare($sql);

                                    //Execute the statement.
                                    $stmt->execute();

                                    //Retrieve the rows using fetchAll.
                                    $anos = $stmt->fetchAll();
                                    ?>

                                    <select id="anio" name="ano" class="form-control" onchange="Año()">

                                        <?php foreach($anos as $ano): ?>
                                            <option value="<?= $ano['idAno']; ?>"><?= $ano['Ano_Ano']; ?></option>
                                        <?php endforeach; ?>

                                    </select>

                                </div>
                            </div>

                            <!--						elementos del primer formulario-->
                            <button onclick="continuar1()" class="btn btn-primary float-right"> Continuar <i class="fa fa-arrow-right"></i></button>

                    </div>
                    <!--						elelementos del segundo formulario-->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <form action="" id="frm_crear_cita">
                            <fieldset class="form-group">
                                <legend><i class="fa fa-calendar-plus-o"></i> Generar cita de servicio: </legend>
                            </fieldset> <!---->
                            <div>
                                <h3>Dias  Y Horas disponibles para el servicio <span class="txt_servicio"></span></h3>
                                <div class="form-group"><!----> <p>Seleccione una fecha para verificar las horas disponibles</p>
                                    <label for="fechascalendario"><i class="fa fa-calendar"></i> Fechas</label>

                                    <?php
                                    //Our select statement. This will retrieve the data that we want.
                                    $sql = "SELECT idFecha, Fecha_fecha FROM fecha";

                                    //Prepare the select statement.
                                    $stmt = $pdo->prepare($sql);

                                    //Execute the statement.
                                    $stmt->execute();

                                    //Retrieve the rows using fetchAll.
                                    $fechas = $stmt->fetchAll();
                                    ?>

                                    <select id="fechascalendario" name="fecha" class="form-control" onchange="Fecha()">

                                        <?php foreach($fechas as $fecha): ?>
                                            <option value="<?= $fecha['idFecha']; ?>"><?= $fecha['Fecha_fecha']; ?></option>
                                        <?php endforeach; ?>

                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="hora"><i class="fa fa-clock-o"></i> Horas</label>
                                    <?php
                                    //Our select statement. This will retrieve the data that we want.
                                    $sql = "SELECT idHora, Hora_hora FROM hora";

                                    //Prepare the select statement.
                                    $stmt = $pdo->prepare($sql);

                                    //Execute the statement.
                                    $stmt->execute();

                                    //Retrieve the rows using fetchAll.
                                    $horas = $stmt->fetchAll();
                                    ?>

                                    <select id="hora" name="hora" class="form-control" onchange="Hora()">

                                        <?php foreach($horas as $hora): ?>
                                            <option value="<?= $hora['idHora']; ?>"><?= $hora['Hora_hora']; ?></option>
                                        <?php endforeach; ?>

                                    </select>

                                </div>
                            </div> <!----> <!---->

                            <!--						elementos del segundo formulario-->
                            <button onclick="regresar2()" class="btn btn-danger"><i class="fa fa-undo"></i> Regresar</button>
                            <button onclick="continuar2()" class="btn btn-primary float-right"> Continuar <i class="fa fa-arrow-right"></i></button>



                    </div>

                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                        <!--						elementos del tercer formulario-->
                        <fieldset class="form-group">
                            <legend><i class="fa fa-calendar-plus-o"></i> Generar cita de servicio: </legend>
                        </fieldset>

                        <div class="form-control">
                            <h3><i class="fa fa-user"></i> Datos de cliente:</h3>

                            <div class="form-group">
                                <label for="nombre"><i class="fa fa-info"></i>Nombre</label>
                                <input type="text"  id="nombre" name="nombre_cliente"  class="form-control"  data-toggle="tooltip" oninput="Nombre()" >
                            </div>

                            <div class="form-group">
                                <label for="apellidos"><i class="fa fa-info"></i> Apellidos</label>
                                <input type="text" id="apellidos" name="apellido_cliente"  class="form-control"  data-toggle="tooltip" oninput="Apellido()">
                            </div>

                            <div class="form-group"><label for="telefono"><i class="fa fa-phone"></i> Telefono</label>
                                <input  type="phone" name="telefono" maxlength="13" id="telefono" class="form-control"  data-toggle="tooltip" oninput="Telefono()" >
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="tipotel" id="optionsRadios1" value="celular"  class="form-check-input"  data-toggle="tooltip"  oninput="Radio()" > Celular
                                </label>
                                <span id="RCEMostrar"></span>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="tipotel" id="optionsRadios2" value="casa" class="form-check-input"  data-toggle="tooltip"  onclick="Radio(this.value)">Casa
                                </label>
                                <span id="RCAMostrar"></span>
                            </div>

                            <div class="form-group">
                                <label for="coreo"><i class="fa fa-envelope"></i> Correo electronico</label>
                                <input type="email" name="email" id="correo" class="form-control"  data-toggle="tooltip" oninput="Correo()" >
                            </div>

                            <div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input name="valet" type="checkbox" id="myCheck" class="form-check-input" onclick="myFunction()" >
                                        <i class="fa fa-bus"></i> Servicio de transporte?
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="comentarios"><i class="fa fa-commenting-o"></i> Comentarios</label>
                                    <textarea name="comentario" id="comentario" rows="3" class="form-control" oninput="Comentario()"></textarea>
                                </div>
                            </div>
                        </div>

                        <button onclick="regresar3()" class="btn btn-danger"><i class="fa fa-undo"></i> Regresar</button>

                        <input type="submit" class="btn btn-success float-right" name="Aceptar" value="Agendar Cita">



                        <!--						elementos del tercer formulario-->

                    </div>
                </div>
            </div>
        </div>
        </form>

        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-4 M">
            <div class="A1" >
                <hr class="new4">
                <hr class="new5">
                <img src="https://hsas.gpoptima.info/assets/img/logo.png" alt="Honda Optima" width="200px;" class="card-img-top" height="28px;">
                <div class="card-header bg-danger text-white mt-3">
                    <h2 class="card-title text-center"><i class="fa fa-info-circle"></i> Mi cita de servicio</h2>
                </div>
                <div class="card-block">

                    <h4><i class="fa fa-info-circle mb-4"></i> Información de mi cita</h4>

                    <div class="row">
                        <div class="col-xs-12 col-md-6" >
                            <p class="card-text">
                                <i class="fa fa-building-o"></i> Taller: <span><span id="TallerMostrar"></span> </span>
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <p class="card-text">
                                <i class="fa fa-car"></i> Modelo de mi vehículo: <span><span id="ServicioMostrar"></span>   </span>
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <p class="card-text">
                                <i class="fa fa-wrench"></i> Servicio solicitado: <span><span id="MarcaMostrar"></span></span>
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <p class="card-text">
                                <i class="fa fa-info"></i> Marca de mi vehículo: <span><span id="ModeloMostrar"></span></span>
                            </p>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <p class="card-text"><i class="fa fa-info"></i> Año: <span><span id="AñoMostrar"></span></span></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="fecha A2 card-block">
                <h4><i class="fa fa-calendar"></i> Fecha y hora de mi cita</h4>
                <p class="card-text"><i class="fa fa-calendar"></i><span >Fecha: </span><span id="FechaMostrar"></span></p>
                <p class="card-text"><i class="fa fa-clock-o"></i><span >Hora: </span><span id="HoraMostrar"></span></p>
            </div>


            <div  class="contacto A3 card-block">

                <h4 class="card-title"><i class="fa fa-user-o"></i> Mis datos</h4>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <p class="card-text"><i class="fa fa-info"></i> Nombre: <span><span id="NombreMostrar"></span></span></p>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p class="card-text"><i class="fa fa-info"></i> Apellidos: <span><span id="ApellidosMostrar"></span></span></p>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p class="card-text"><i class="fa fa-envelope"></i> Correo: <span><span id="CorreoMostrar"></span></span></p>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p class="card-text"><i class="fa fa-coomenting-o"></i> Comentarios: <span><span id="ComentarioMostrar"></span></span></p>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p class="card-text"><i class="fa fa-phone"></i> Telefono: <span><span id="TelefonoMostrar"></span></span></p>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p class="card-text"><i class="fa fa-bus"></i> Necesita servicio de transporte: <span><p id="text" style="display:none">Si</p></span></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







<script>
    function validar() {

        var inputs = document.getElementsByTagName('input');
        for(var i in inputs){//recorremos todos los inputs
            if(inputs[i]){
                inputs[i].title = '';//aqui igualamos los titles a nada
                inputs[i].style ? inputs[i].style.background: ''; //le quitamos los colores
            }

        }
        var nombre, apellidos, telefono, correo, expresion, expresion2, comentario;
        var radios = document.getElementsByName("tipotel");
        var formValid = false;
        nombre = document.getElementById("nombre").value;
        apellidos = document.getElementById("apellidos").value;
        telefono = document.getElementById("telefono").value;
        correo = document.getElementById("correo").value;
        comentario = document.getElementById("comentario").value;
        expresion = /\w+@\w+\.+[a-z]/;
        expresion2= /^[A-Za-z]+[0-9]+/;



        if (nombre === "") {
            //alert("El campo nombre est� vacio");
            document.getElementById("nombre").title = "El campo nombre está vacio";
            document.getElementById("nombre").style.borderColor = "red";
            return false;
        } else if (!isNaN(nombre)) {
            document.getElementById("nombre").title = ("Por favor introduce una letra y no numero en nombre");
            document.getElementById("nombre").style.borderColor = "red";
            return false;
        }else if (expresion2.test(nombre)) {
            document.getElementById("nombre").title = ("Por favor introduce solo letras");
            document.getElementById("nombre").style.borderColor = "red";
            return false;
        } else if (nombre.length < 4) {
            document.getElementById("nombre").title = ("El nombre es muy corto");
            document.getElementById("nombre").style.borderColor = "red";
            return false;
        } else if (nombre.length > 30) {
            document.getElementById("nombre").title = ("El nombre es muy largo");
            document.getElementById("nombre").style.borderColor = "red";
            return false;
        }else{// está todo bien
            document.getElementById("nombre").style.borderColor = "green";
        }

        if (apellidos === "") {
            document.getElementById("apellidos").title = ("Los apellidos están vacios");
            document.getElementById("apellidos").style.borderColor = "red";
            return false;
        } else if (!isNaN(apellidos)) {
            document.getElementById("apellidos").title = ("Por favor introduce una letra y no numero en apellidos");
            document.getElementById("apellidos").style.borderColor = "red";
            return false;
        }  else if (expresion2.test(apellidos)) {
            document.getElementById("apellidos").title = ("Por favor introduce solo letras");
            document.getElementById("apellidos").style.borderColor = "red";
            return false;
        }else if (apellidos.length > 45) {
            document.getElementById("apellidos").title = ("Los apellidos es muy largo");
            document.getElementById("apellidos").style.borderColor = "red";
            return false;
        } else{
            document.getElementById("apellidos").style.borderColor = "green";
        }

        if (isNaN(telefono)) {
            document.getElementById("telefono").title = ("Por favor introduce un numero y no letras");
            document.getElementById("telefono").style.borderColor = "red";
            return false;
        } else if (telefono === "") {
            document.getElementById("telefono").title = ("N�mero de teléfono está vacio");
            document.getElementById("telefono").style.borderColor = "red";
            return false;
        } else if (telefono.length < 10) {
            document.getElementById("telefono").title = ("El telefono es muy corto, deben ser entre 10 para " +
                "numeros nacionales y 13 para internacionales");
            document.getElementById("telefono").style.borderColor = "red";
            return false;
        } else if (telefono.length > 13) {
            document.getElementById("telefono").title = ("El telefono es muy largo, deben ser entre 10 para " +
                "numeros nacionales y 13 para internacionales");
            document.getElementById("telefono").style.borderColor = "red";
            return false;
        }else{
            document.getElementById("telefono").style.borderColor = "green";
        }


        var i = 0;
        while (!formValid && i < radios.length) {
            if (radios[i].checked)
                formValid = true;
            i++;
        }

        if (!formValid) {
            document.getElementById("correo").title = ("Por favor selecciona un tipo de numero telefonico");
            document.getElementById("correo").style.borderColor = "red";
            return formValid;
        } else if (correo === "") {
            document.getElementById("correo").title = ("Correo electronico est� vacio");
            document.getElementById("correo").style.borderColor = "red";
            return false;
        } else if (!expresion.test(correo)) {
            document.getElementById("correo").title = ("Correo electronico no es valido");
            document.getElementById("correo").style.borderColor = "red";
            return false;

        } else if (correo.length > 100) {
            document.getElementById("correo").title = ("El correo es muy largo");
            document.getElementById("correo").style.borderColor = "red";
            return false;
        } else{
            document.getElementById("correo").style.borderColor = "green";
        }



        if (comentario === "") {
            document.getElementById("comentario").title = ("Comentario, por favor.");
            document.getElementById("comentario").style.borderColor = "red";
            return false;
        }else{
            document.getElementById("comentario").style.borderColor = "green";
        }

        function setErrorFor(input, message) {
            const formControl = input.parentElement;
            const small = formControl.querySelector('small');
            formControl.className = 'form-control error';
            small.innerText = message;
        }

        function setSuccessFor(input) {
            const formControl = input.parentElement;
            formControl.className = 'form-control success';
        }
        $('[data-toggle="tooltip"]').tooltip(); //correr tooltip
    }
</script>







<script>
    function Taller() {
        var x = document.getElementById("ciudad");
        var i = x.selectedIndex;
        document.getElementById("TallerMostrar").innerHTML = x.options[i].text;
    }
    function Servicio() {
        var x = document.getElementById("servicio");
        var i = x.selectedIndex;
        document.getElementById("ServicioMostrar").innerHTML = x.options[i].text;
    }

    function Marca() {
        var x = document.getElementById("marca");
        var i = x.selectedIndex;
        document.getElementById("MarcaMostrar").innerHTML = x.options[i].text;
    }

    function Modelo() {
        var x = document.getElementById("modelo2");
        var i = x.selectedIndex;
        document.getElementById("ModeloMostrar").innerHTML = x.options[i].text;
    }

    function Año() {
        var x = document.getElementById("anio");
        var i = x.selectedIndex;
        document.getElementById("AñoMostrar").innerHTML = x.options[i].text;
    }

    function Fecha() {
        var x = document.getElementById("fechascalendario");
        var i = x.selectedIndex;
        document.getElementById("FechaMostrar").innerHTML = x.options[i].text;
    }

    function Hora() {
        var x = document.getElementById("hora");
        var i = x.selectedIndex;
        document.getElementById("HoraMostrar").innerHTML = x.options[i].text;
    }

    function Nombre() {
        var x = document.getElementById("nombre").value;
        document.getElementById("NombreMostrar").innerHTML = x;
    }

    function Apellido() {
        var x = document.getElementById("apellidos").value;
        document.getElementById("ApellidosMostrar").innerHTML = x;
    }

    function Telefono() {
        var x = document.getElementById("telefono").value;
        document.getElementById("TelefonoMostrar").innerHTML = x;
    }

    function Correo() {
        var x = document.getElementById("correo").value;
        document.getElementById("CorreoMostrar").innerHTML = x;
    }

    function myFunction() {
        // Get the checkbox
        var checkBox = document.getElementById("myCheck");
        // Get the output text
        var text = document.getElementById("text");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }

    function Comentario() {
        var x = document.getElementById("comentario").value;
        document.getElementById("ComentarioMostrar").innerHTML = x;
    }

</script>




<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.js"></script>

</body>
</html>