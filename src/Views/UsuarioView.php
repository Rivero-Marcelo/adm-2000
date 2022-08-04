<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $_ENV['TITULO_INDEX']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>


   
  <div class="container">

  <h1>Nuevo Usuario</h1>

      <form action="/adm/usuario/alta" method="post" class="row g-3 mt-3" >

          <div class="col-6">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="usuario">
          </div>

          <div class="col-6">
            <label for="pass" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass">
          </div>

          <div class="col-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
          </div>

          <div class="col-6">
            <label for="pass" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="pass" placeholder="Apellido" name="apellido">
          </div>

          <div class="col-12 mb-3">
            <label for="mail" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="mail" placeholder="E-mail" name="email">
          </div>

          <button type="submit" class="btn btn-primary mb-3">Aceptar</button>
 
      </form>

  </div>


  <br><br>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>