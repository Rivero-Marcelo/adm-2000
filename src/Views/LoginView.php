<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $_ENV['TITULO_INDEX']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
  <style>

    body{
        background: rgb(47, 67, 219);
    }

    .bg{
        background-image: url('/img/imgLogin.jpg');
        background-position: center center;

    } 
  </style>

  </head>
  <body>


    <div class="container w-75 bg-light mt-4 rounded shadow"> 
      <div class="row">

        <div class="col-7 bg">

        </div>
 
        <div class="col p-5 rounded">
          <div class="text-end"><h3>ADM - 2000</h3></div>
          <h2 class="fw-bold text-center py-5">Inicio de Sesión</h2>

          <form action="#" method="post">
            
            <div class="mb-4">
              <label for="" class="form-label">Usuario</label>
              <input type="text" class="form-control" name="usuario">
            </div>
            <div class="mb-4">
              <label for="" class="form-label">Contraseña</label>
              <input type="password" class="form-control" name="password"> 
            </div>
            

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
          </form>

            <div class="container w-100 mb-5">
              <br><br><br>
              <a href="#">Solicitud de Registro</a>
            </div>

        </div>


      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>