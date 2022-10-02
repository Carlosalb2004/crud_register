<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div>
    
  </div>
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Menu</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link active" aria-current="page">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              Inicio
            </a>
          </li>
          <li>
            <a href="registration-service.php" class="nav-link link-dark">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              Registro de Servicios
            </a>
          </li>
          <li>
            <a href="registration-clients.php" class="nav-link link-dark">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              Registro de Clientes
            </a>
          </li>
          <li>
            <a href="registration.php" class="nav-link link-dark">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              Registro de Usuarios
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="usuario.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="logout.php">Cerrar Sesion</a></li>
            </ul>
            </div>
        </div>
</body>
</html>
