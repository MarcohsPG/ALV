<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!--Hojas de estilo-->
    <link rel="stylesheet" href=" ../CSS/maquetado.css">
    <link rel="stylesheet" href=" ../CSS/Botones.css">
    <link rel="stylesheet" href=" ../CSS/Inicio-Cliente.css">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body class="grid-container" style="background-image:url(./../img/chido.jpg)">
    <!--Heder-->
    <header class="header">
        <div class="Boton-desplegable" id="Boton-desplegable">
            <img src=" ../img/logo.png" alt="Boton menu" style="height:50px; width: 80%;">
        </div>
        <!--
        <div class="Logo">
            <img src=" ../img/logo.png" alt="Logo Veterinaria">
        </div>
-->
        <div class="Container-Reloj">
            <div class="Datos-hora" id="reloj"></div>
            <div class="Datos-fecha">
                <span id="fec_Datos"></span>
            </div>
        </div>

        <div class="Container-Btn-CS">
            <button type="button" class="boton dos" onclick="location.href=' ../index.html'">
                <span>Cerrar sesión</span>
            </button>
        </div>
    </header>

    <!--Contenido principal-->
    <main class="main">
        <div class="Bievenida-container">
            <h1 class="Bievenida">
                Bienvenido
            </h1>
        </div>

        <div class="Botones-container">

            <div class="Container-Actividad1">
                <h2 class="nombre-atividad">Iniciar denuncia</h2>
                <a href="AgendarCita.html" class="BotonActividad">
                    <img src=" ../img/AgendarCita.png" alt="Agendar cita">
                </a>
            </div>

            <div class="Container-Actividad2">
                <h2 class="nombre-atividad">Modificar datos personales</h2>
                <a href="HistorialConsultas.html" class="BotonActividad">
                    <img src=" ../img/HistorialMedico.png" alt="Historial de consultas">
                </a>
            </div>

            <div class="Container-Actividad3">
                <h2 class="nombre-atividad">Preguntas frecuentes</h2>
                <a href="PagosConsultas.html" class="BotonActividad">
                    <img src=" ../img/PagarConsulta.png" alt="Pagar consulta">
                </a>
            </div>

            <div class="Container-Actividad4">
                <h2 class="nombre-atividad">Estatus de denuncias previas</h2>
                <a href="ConsultarEstado.html" class="BotonActividad">
                    <img src=" ../img/ActualizarEstado.png" alt="Estado de Mascota">
                </a>
            </div>

        </div>
        
        <!--Menu desplegable-->
        <div class="container-menu-desplegable active" id="menu-desplegable">
            <ul>
                <li> <a href="#">Inicio</a> </li>
                <li> <a href="RegistrarCliente.html">Agendar Cita</a> </li>
                <li> <a href="RegistrarMascota.html">Historial de consultas</a> </li>
                <li> <a href="BuscarCliente.html">Pagar Consulta</a> </li>
                <li> <a href="BuscarMascota.html">Estado de Mascota Ingresada</a> </li>
                <li> <a href=" ../index.html">Cerrar seción</a> </li>
            </ul>
        </div>


    </main>

    <!--pie de página-->
    <footer class="footer">
        <h5 class="Datos-contacto">Datos de contacto</h5>
        <p class="Datos-contacto">Correo:   equipo3@escom.com</p>
        <p class="Datos-contacto">Telefono: 07700900461</p>
    </footer>

    <script src=" ../JS/reloj.js"></script>
    <script src=" ../JS/MenuDesplegable.js"></script>
</body>
</html>