<?php include("conexion.php");

$sql = "SELECT * FROM  empleados";
$query =mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6e524d64bb.js" crossorigin="anonymous"></script>
    <title>Listar</title>
</head>
<body>
<div class="container">
<h2 class="m-5">Empleados</h2>
<table class="table m-5">
  <thead>
    <tr>
      <th scope="col" >ID</th>
      <th scope="col" >Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Sexo</th>
      <th scope="col">Area</th>
      <th scope="col">Boletin</th>
      <th scope="col"><a href="views/insert.php" class="btn btn-primary"><i class="fas fa-user-plus"> Crear </i></a></th>
    </tr>
  </thead>
  <tbody>
     <?php 
      while($row=mysqli_fetch_array($query)){
     ?>
    <tr>
      <th> <?php echo $row['id']?> </th>
      <td><?php echo $row['nombre']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['sexo']?></td>
      <td><?php echo $row['area_id']?></td>
      <td><?php echo $row['boletin']?></td>
      <td><a href="views/editar.php?id=<?php echo $row['id']?>"><i class="fas fa-edit text-warning"></i></a></td>
      <td><a href="controller/delete.php?id=<?php echo $row['id']?>"><i class="fas fa-trash-alt text-danger"></i></a></td>


    </tr>
    <?php
      }
    ?>
  </tbody>
</table>

</div>

    
</body>
</html>