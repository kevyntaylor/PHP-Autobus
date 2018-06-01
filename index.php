<?php
    //session_start();
    //print_r($_SESSION["bus"]);
?>

<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="components/css/materialize.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Autobús</title>
</head>

<!-- Se llama al metodo onReady del js main -->
<body onload="onReady()">

<header>
    <div class="navbar-fixed">
        <nav class="blue darken-4">
            <div class="nav-wrapper" style="padding-left: 10px; padding-right: 10px">
                <a class="brand-logo">Autobús</a>
                <ul id="nav-mobile" class="right hide-on-small-only">
                    <div id="_detatail_bus"></div>
                </ul>
            </div>
        </nav>
    </div>
</header>
<main style="margin: 25px">

    <div class="">
        <div class="row">
            <div class="col s12 m6 l8 " style="padding: 15px;">

                <!-- Formulario -->
                <form method="post">
                    <div class="row">
                        <div class="input-field col s12 l4 m6">
                            <input placeholder="Nombre" id="inp_name" type="text" class="validate" required>
                            <label for="inp_name">Nombre</label>
                        </div>
                        <div class="input-field col s12 l4 m6">
                            <input placeholder="Apellidos" id="inp_first_name" type="text" class="validate" required>
                            <label for="inp_first_name">Apellidos</label>
                        </div>
                        <div class="input-field col s12 l4 m6">
                            <input placeholder="Destino" id="inp_destiny" type="text" class="validate" required>
                            <label for="inp_destiny">Destino</label>
                        </div>
                        <div class="input-field col s12 l4 m6">
                            <input placeholder="Origen" id="inp_origin" type="text" class="validate" required>
                            <label for="inp_origin">Origen</label>
                        </div>
                        <div class="input-field col s12 l4 m6">
                            <input placeholder="Precio" id="inp_cost" type="number" class="validate" required>
                            <label for="inp_cost">Precio</label>
                        </div>
                        <div class="input-field col s12 l4 m6" id="_select">

                        </div>
                        <div class="input-field col s12 l4 m6">
                            <!-- Button con metodo OnClick-->
                            <a class="waves-effect waves-light btn right" onclick="assignSeat()">
                                <i class="material-icons right">send</i>Guardar
                            </a>
                        </div>
                    </div>
                </form>
                <!-- -->

            </div>
            <div class="col s12 m6 l4"  style="padding: 15px">
                <div class="row">
                    <div class="col s12 m12 l12 center-align">
                        <div class="col l1 m2 hide-on-small-only"></div>
                        <!-- div para mostrar los asientos del autobus -->
                        <div class="col s12 l10 m8" id="_autobus"></div>
                        <!-- -->
                        <div class="col l1 m2 hide-on-small-only"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="_info" class="modal">
        <div class="modal-content">
            <h4>Detalles del Asiento</h4>
            <div id="_detail">

            </div>
        </div>
        <div class="modal-footer">
            <a class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
        </div>
    </div>

</main>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="components/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="components/js/materialize.js"></script>
<script type="text/javascript" src="components/js/init.js"></script>
<script type="text/javascript" src="logic/main.js"></script>
</body>
</html>