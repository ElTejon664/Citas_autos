function validar() {

    var inputs = document.getElementsByTagName('input');
    for(var i in inputs){//recorremos todos los inputs
        if(inputs[i]){
            inputs[i].title = '';//aqui igualamos los titles a nada
            inputs[i].style ? inputs[i].style.borderColor: ''; //le quitamos los colores
        }

    }
    var nombre, apellidos, telefono, correo, expresion, comentario;
    var radios = document.getElementsByName("tipotel");
    var formValid = false;
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    telefono = document.getElementById("telefono").value;
    correo = document.getElementById("correo").value;
    comentario = document.getElementById("comentario").value;
    expresion = /\w+@\w+\.+[a-z]/;



    if (nombre === "") {

        document.getElementById("nombre").title = "El campo nombre está vacio";
        document.getElementById("nombre").style.borderColor = "red";
        return false;
    } else if (!isNaN(nombre)) {
        document.getElementById("nombre").title = ("Por favor introduce una letra y no numero en nombre");
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
        document.getElementById("apellidos").title = ("Los apellidos est�n vacios");
        document.getElementById("apellidos").style.borderColor = "red";
        return false;
    } else if (!isNaN(apellidos)) {
        document.getElementById("apellidos").title = ("Por favor introduce una letra y no numero en apellidos");
        document.getElementById("apellidos").style.borderColor = "red";
        return false;
    } else if (apellidos.length > 45) {
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
        document.getElementById("telefono").title = ("Número de teléfono está vacio");
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
        document.getElementById("correo").title = ("Correo electronico está vacio");
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