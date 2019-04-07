<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>FORMULARIO</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper blue lighten-1">
            <img src="../public/img/logoEcotec.jpg" class="brand-logo circle center" height="60px" width="auto" alt="logo-ecotec">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="Views/About.html">Acerca de</a></li>
                <li><a href="Views/Form.php">Formulario</a></li>
                <!--<li><a href="collapsible.html">JavaScript</a></li>-->
            </ul>
        </div>
    </nav>
    <div class="container center">
        <div class="row">
            <form class="col s12" action="../Controller/formController.php" method="POST">
                <div class="row">
                    <div class="input-field col s8">
                        <i class="material-icons prefix">assignment</i>
                        <input id="name" type="text" class="validate" required="" aria-required="true">
                        <label for="name">Nombre</label>
                    </div>
                    <div class="input-field col s8">
                        <i class="material-icons prefix">phone</i>
                        <input id="telephone" type="tel" class="validate">
                        <label for="telephone">Telefono</label>
                    </div>
                    <div class="input-field col s8">
                        <i class="material-icons prefix" >email</i>
                        <input id="email" class="validate" type="email" required="" aria-requried="true">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s8">
                        <i class="material-icons prefix">address</i>
                        <input type="text" id="address" class="validate" required="" aria-required="true">
                        <label for="address">Direccion</label>
                    </div>
                    <div class="col s12">
                        <button class="btn waves-effect waves-light col s8 blue lighten-1" type="submit" name="submit_form">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
           
        </div>
    </div>
</body>
<script src="../public/vendor/js/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javaScript">
    function sendData() {
        $.ajax({
            url: "../Controller/formController.php",
            method: "POST",
            data: {
                sentData: "Sent",
                name: $("#name").val(),
                email: $("#email").val(),
                telefono: $("#telephone").val(),
                address: $("#address").val(),
            },
            success: function (respuesta) {
                console.log(respuesta.nombre);
                alert(respuesta.nombre);
            }
        });
    }
</script>
</html>