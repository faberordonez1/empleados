<?php 
include("../conexion.php");

    if(isset($_POST['crearEmpleado'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $area = $_POST['area'];
        
        $boletin=0;
         if(!empty($_POST['boletin'])){
            $boletin = $_POST['boletin'];
         };

         $descripcion = $_POST['descripcion'];

         $consultaSql = " INSERT INTO empleados VALUES (null,'$nombre','$email','$sexo','$area','$boletin','$descripcion')";
         $query =mysqli_query($conn,$consultaSql);
         

        
         if(!empty($_POST['rol'])){

                foreach($_POST['rol'] as $rol_id){
                    echo "<p>".$rol_id."</p>";
                }          
        }

        if($query){
            Header("Location:../index.php");

        }else{
            echo "Error de creaciòn";
        }

    }
   
  
?>