<?php
include("../config/config.php");
include("'patient.php");
$p = new Patient();

$allPatients= $p->getAll();

if(isset($_GET["id"]) && !empty($GET["id"])){
    $remove = $p->remove($GET['id']);
    if($remove){
        header('Location: '. ROOT . 'Patients/index.php' );
    } else { 
        $smj = "div class='alert alert-danger' rol='alert'> Error al eliminar agenda- </div> ";
    }
}

?>
<DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Psiconecta usuarios</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php include("../menu.php") ?>;
    <div class="container">
        <h2 class="text-center mb-5"> Psiconecta usuarios </h2>

        <div class="row">
            <?php
    while ($patient = mysqli_fetch_object($allPatients)){
        $input = $patient->motivoDeConsulta;
        echo "div class='col' >";
        echo "div class='border border-info p-2' >";
        echo "<h5>

            $patient-> nombreCompleto $patient->telefono
             </h5>";
        echo "<p> <b>Fecha:</b>" .date("D",strtotime($input)) . "" . date("D-M-Y", strtotime($input)) ."</p>";
        echo "<div class='text-center' ><aclass=btn-success ' href='".ROOT."/Patients/edit.php?id=$patient->id' > Modificar </a> - <a class=btn'btn-danger ' href='". ROOT .  "/Patients/index.php?id=$patient->id' > Eliminar </a> </div>";
        echo "</div>";
        echo "</div>";
        }
        ?>
        </div>

    </div>
    </body>

</html>