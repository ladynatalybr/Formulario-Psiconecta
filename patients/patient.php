<?php
    include('../config/config.php');
    include('../config/Database.php');

    class Patient{
        public$conn;

        public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connectToDatabase();
    } 
    function save($params){
        $nombreApellidos = $params['nombreApellidos'];
        $fechaDeNacimiento = $params['fechaDeNacimiento'];
        $genero = $params['genero'];
        $telefono = $params['telefono'];
        $correoElectronico = $params['correoElectronico'];
        $direccionDeResidencia = $params['direccionDeResidencia'];
        $motivoDeConsulta = $params['motivoDeConsulta'];

        $insert = "INSERT INTO patients VALUES (NULL, '$nombreApellidos','$fechaDeNacimiento','$genero','$telefono','$correoElectronico','$direccionDeResidencia','$motivoDeConsulta')";
        return mysqli_query($this->conn, $insert);
        }


    

    function getAll(){
        $sql = "SELECT * FROM Patients ORDER BY sessionDate ASC";
        return mysqli_query ($this->conn, $sql);
    }

    function getOne($id) { 
        $sql = "SELECT * FROM Patients WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }
        
    public function update($params)
{
    $id = $params['id'];
    $nombreApellidos = $params['nombreApellidos'];
    $fechaDeNacimiento = $params['fechaDeNacimiento'];
    $genero = $params['genero'];
    $telefono = $params['telefono'];
    $correoElectronico = $params['correoElectronico'];
    $direccionDeResidencia = $params['direccionDeResidencia'];
    $motivoDeConsulta = $params['motivoDeConsulta'];


  



        $update = "UPDATE patients SET 
        nombreApellidos='$nombreApellidos', 
        fechaDeNacimiento='$fechaDeNacimiento', 
        genero='$genero', 
        telefono='$telefono', 
        correoElectronico='$correoElectronico', 
        direccionDeResidencia='$direccionDeResidencia', 
        motivoDeConsulta='$motivoDeConsulta' 
        WHERE id = $id";

return mysqli_query($this->conn, $update);
}




        
function remove($id){ 
        $remove = "DELETE FROM Patients WHERE id = $id";
        return mysqli_query($this->conn, $remove);
     }



    }
?>