<?php
    include('../config/config.php');
    include('Patient.php');

    if (isset($_POST) && !empty($_POST)){
        $patient = new Patient();

        

        $save = $patient->save($_POST);
        if ($save){
            $error = '<div class = "alert alert-success" role="alert"> Registro creado correctamente </div>';
        }else{
            $error = '<div class = "alert alert-danger" role="alert"> Error al crear el registro </div>';
        }
    }

    ?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF=8"/>
<title> Agenda tu cita </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../estilos/style.css">
    <link rel="stylesheet" href="../estilos/mq.css">

</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <img class="logo" src="../img/Logo-modified.png" alt="logo">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.html">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current href="../quienessomos.html">Quienes somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current href="../blog.html">blogs investigativos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current href="../patients/add.php">Agenda tu cita</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<hr>

<div class="text-success">
  <hr>
</div>

<hr class="border border-danger border-2 opacity-50">
<hr class="border border-primary border-3 opacity-75">

<hr>




    <div class="container">
        <?php
        if (isset($error)){
            echo $error;
        }
        ?>
       <div class="container mt-5">
    <h4 class="text-center mb-5"> Deja tus datos para que podamos contactarte</h4>
    <form method="POST" enctype="multipart/form-data">
        
        <div class="row mb-2">
            <div class="col">
                <input type="text" name="nombreApellidos" id="nombreApellidos" placeholder="Nombre y apellidos" required class="form-control"/>
            </div>
        </div>
        
        <div class="row mb-2">
            <div class="col">
                <input type="date" name="fechaDeNacimiento" id="fechaDeNacimiento" placeholder="Fecha de nacimiento" required class="form-control"/>
            </div>
        </div>
        
        <div class="row mb-2">
            <div class="col">
                <input type="text" name="genero" id="genero" placeholder="Género" required class="form-control"/>
            </div>
        </div>
        
        <div class="row mb-2">
            <div class="col">
                <input type="email" name="correoElectronico" id="correoElectronico" placeholder="Correo electrónico" required class="form-control"/>
            </div>
        </div>
        
        <div class="row mb-2">
            <div class="col">
                <input type="number" name="telefono" id="telefono" placeholder="Teléfono" required class="form-control"/>
            </div>
        </div>
        
        <div class="row mb-2">
            <div class="col">
                <input type="text" name="direccionDeResidencia" id="direccionDeResidencia" placeholder="Ciudad y dirección de residencia" required class="form-control"/>
            </div>
        </div>
        
        <div class="row mb-2">
            <div class="col">
                <textarea name="motivoDeConsulta" id="motivoDeConsulta" placeholder="Motivo de consulta" required class="form-control"></textarea>
            </div>
        </div>

        <button class="btn btn-success">Enviar información</button>
    </form>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7949.694918018746!2d-73.91597331247294!3d4.965012618667203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4073c08fce5755%3A0x2580e3e7c2af58d0!2sParque%20Principal%20de%20Tocancip%C3%A1!5e0!3m2!1ses-419!2sco!4v1700332948504!5m2!1ses-419!2sco" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <footer class="footer mt-5">
        <address>2023 copyrigth psicontacto.com</address>
        <div>Colombia</div>
        <div>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">Whatsapp</a>
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>