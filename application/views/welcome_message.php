<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Barra de navegación</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<img src="assets/img/logo.png"  height="80"  style="position: relative; top: 50px;"/> 
<img src="assets/img/alum.jpg" height="100" style="display: block; margin: 300px auto 0 auto;">

    <!-- Barra de navegación -->
    <ul class="nav justify-content-center mt-3">

        <li class="nav-item">
            <a class="nav-link active text-dark" href="#">Inicio</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active text-dark" href="#">Formulario</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active text-dark" href="#">Login</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link active text-dark dropdown-toggle"
               href="#"
               role="button"
               data-bs-toggle="dropdown">
                Opciones
            </a>

            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="#">Estudiantes</a>
                </li>

                <li>
                    <a class="dropdown-item" href="#">Calificaciones</a>
                </li>

                <li>
                    <a class="dropdown-item" href="#">Perfil</a>
                </li>
            </ul>
        </li>

    </ul>

    <!-- JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
