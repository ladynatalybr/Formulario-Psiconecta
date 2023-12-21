<?php
 include('..//config/config');
 include('Patient.php');
 $p =new Patient();
$data = mysqli_fetch_object($p->getOne($_GET['id']));
$data = new DateTime($data->motivoDeConsulta);

   if (isset($_POST) && !empty($_POST)){
    /* $_POST ['image'] = $data->nombreCompleto;
    if ($_FILES['imagen']['name'] !== ''){
        $_POST['imagen'] = saveImage($_FILES);
      } */
$update = $p->update($_POST);
if ($update){
    $error = '<div class = "alert alert-success" role="alert"> Registro modificado</div>';
}else{
    $error = '<div class = "alert alert-danger" role="alert"> Error al modificar el registro </div>';
}
}

    ?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF=8"/>
<title> Registrate para que podamos contactarte</title>
<<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php include('../menu.php')?>
    <div class="container">
        <?php
        if (isset($error)){
            echo $error;
        }
        ?>
          <h2 class="text-center mb-5"> Datos de registro </h2>
        <form method="POTS" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
                    <impunt type="text" name="nombreApellidos" id="nombreApellidos" placeholder="Nombre y Apellidos" require class="form-control"/>
    </div>
    <div class="row mb-2">
    <div class="col">
        <imput type="number" name=" fechaDeNacimiento" id="fechaDeNacimiento" placeholder="Fecha de nacimiento" require class="form-control"/>
    </div>
    <div class="row mb-2">
    <div class="col">
        <imput type="text" name=" Genero" id="Genero" placeholder="Genero" require class="form-control"/>
    </div>
    <div class="row mb-2">
    <div class="col">
        <input type="email" name="correoElectronico"id="correoElectronico" placeholder="Correo electronico" require class="form-control"/>
    </div>
</div>
<div class="row mb-2">
    <div class=col>
        <imput type="number" name="Telefono" id="telefono" placeholder="Telefono" require class="form-control"/>
    </div>
 </div>
 <div class="row mb-2">
    <div class=col>
        <imput type="Text" name="direccionDeResidencia"id="direccionDeResidencia" placeholder="Ciudad y direccion de residencia" require class="form-control"/>
    </div>
 </div>
 <div class="row mb-2">
    <div class="col">
        <textarea name="motivoDeConsulta" id="motivoDeConsulta" placeholder="Motivo de consulta" require class="form-control"></textarea>
    </div>
 </div>

    <button class="btn btn-success"> Modificar </button>
    </form>
    </div>
</body>

</html>