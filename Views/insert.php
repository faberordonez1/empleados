<?php  include("../conexion.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrapt 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    <div class="container my-5">

        <h2>Crear Empleado </h2>
        
        <form action="../controller/create.php" method="POST">
          <div class="row mb-3">
            <label for="nombre" class="col-sm-2 col-form-label fw-bold" >Nombre completo*</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="nombre" autofocus>
            </div>
          </div>
            <div class="row mb-3">
              <label for="email" class="col-sm-2 col-form-label fw-bold">Correo electrónico*</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email">
              </div>
            </div>
            <fieldset class="row mb-3">
              <legend class="col-form-label col-sm-2 pt-0 fw-bold">Sexo*</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sexo" id="sexoMasculino" value="M">
                  <label class="form-check-label" for="sexoMasculino">
                    Masculino
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sexo" id="sexoFemenino" value="F">
                  <label class="form-check-label" for="sexoFemenino">
                    Femenino
                  </label>
                </div>
              </div>
            </fieldset>
            <div class="row mb-3">
              <label for="selectArea" class="col-sm-2 col-form-label fw-bold">Area*</label>
              <div class="col-sm-10">
              <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" id="Area" name="area">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="descripcion" class="col-sm-2 col-form-label fw-bold">Descripción*</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-10 offset-sm-2">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="boletin" name="boletin" value="1">
                      <label class="form-check-label" for="boletin">
                        Deseo recibir boletin informativo
                      </label>
                  </div>
              </div>
            </div>
           <div class="row mb-3">
                <label for="inputNombre" class="col-sm-2 col-form-label fw-bold">Roles*</label>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="desarrollador" name="rol[]">
                      <label class="form-check-label" for="desarrollador">
                         Profesional de proyectos - Desarrollador
                      </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" id="gerente" name="rol[]">
                    <label class="form-check-label" for="gerente">
                      Gerente estratégico
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="3" id="auxiliar" name="rol[]">
                    <label class="form-check-label" for="auxiliarAdministrativo">
                      Auxiliar administrativo
                    </label>
                  </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" name="crearEmpleado" value="Guardar">
            
          </form>
    </div>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>
