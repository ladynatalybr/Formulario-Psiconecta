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
<title> Registro </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <?php include('../menu.php')?>
    <div class="container">
        <?php
        if (isset($mensaje)){
            echo $mensaje;
        }
        ?>
        <h2 class="text-center mb-5"> Registrate para que podamos contactarte </h2>
       <form method="POST" enctype="multipart/form-data">

     <div class="row mb-2">
     <div class="col">
        <input type="text" name="nombreApellidos" id="nombreApellidos" placeholder="Nombre  y apellidos" require class="form-control"/>
     </div>
     
    <div class="row mb-2">
    <div class="col">
        <input type="date" name="fechaDeNacimiento" id="fechaDeNacimiento" placeholder="Fecha de nacimiento" require class="form-control"/>
    </div>

    <div class="row mb-2">
    <div class="col">
        <input type="text" name="genero" id="genero" placeholder="genero" require class="form-control"/>
    </div>

    <div class="row mb-2">
    <div class="col">
        <input type="email" name="correoElectronico"id="correoElectronico" placeholder="Correo electronico" require class="form-control"/>
    </div>
</div>
<div class="row mb-2">
    <div class=col>
        <input type="number" name="telefono" id="telefono" placeholder="telefono" require class="form-control"/>
    </div>
 </div>
 <div class="row mb-2">
    <div class=col>
        <input type="Text" name="direccionDeResidencia"id="direccionDeResidencia" placeholder="Ciudad y direccion de residencia" require class="form-control"/>
    </div>
 </div>
 <div class="row mb-2">
    <div class="col">
        <textarea name="motivoDeConsulta" id="motivoDeConsulta" placeholder="Motivo de consulta" require class="form-control"></textarea>
    </div>
 </div>

    <button class="btn btn-success"> Registrarse </button>
    </form>
    </div>

  

</body>

</html>