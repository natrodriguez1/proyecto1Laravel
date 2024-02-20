<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 1 - Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="http://127.0.0.1:8000/create">Proyecto Laravel</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              </div>
          </nav>
      </div>
      <div class="row">
        <div class="col">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/productos">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://127.0.0.1:8000/pedidos">Pedidos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://127.0.0.1:8000/marca">Marcas</a>
            </li>
          </ul>
        </div>
        <div class="col-5">
          <div class="mb-5">
          <h1 class="display-6">Crear pedido</h1>
          </div>
          <form  method="post">
            <div class="mb-4">
              <input type="text" class="form-control" id="nombreCl" name="nombreCl" placeholder="nombre del cliente">
            </div>
            <div class="mb-4">
              <input type="text" class="form-control" id="producto" name="producto" placeholder="producto">
            </div>
            <div class="mb-4">
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion">
            </div>
            <button type = "submit" class="btn btn-primary">Hacer pedido</button>
            
          </form>
        </div>
        <div class="col">
          
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>