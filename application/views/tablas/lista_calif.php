<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SAES | Lista de Calificaciones</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Iconos -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>

        body {
            margin: 0;
            min-height: 100vh;
            color: #f5f3ff;
            font-family: Arial, Helvetica, sans-serif;
            background: #09070f;
        }

        .navbar-saes {
            background: #09070f;
            border-bottom: 1px solid rgba(155, 92, 255, 0.25);
            padding: 14px 25px;
        }

        .navbar-container {
            max-width: 1100px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            text-decoration: none;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .terminal-dot {
            width: 10px;
            height: 10px;
            background: #9b5cff;
            border-radius: 50%;
            display: inline-block;
            margin-right: 8px;
        }

        .nav-links {
            display: flex;
            gap: 5px;
        }

        .nav-links a {
            color: #9f96b2;
            text-decoration: none;
            padding: 9px 14px;
            border-radius: 10px;
        }

        .nav-links a:hover {
            color: white;
            background: rgba(155, 92, 255, 0.15);
        }

        .contenido {
            max-width: 1100px;
            margin: auto;
            padding: 60px 20px;
        }

        .tarjeta {
            background: #110d1b;
            border: 1px solid rgba(155, 92, 255, 0.25);
            border-radius: 22px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .45);
        }

        .tarjeta h1 {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .table {
            color: white;
            margin-bottom: 0;
        }

        .table th {
            background: #171022;
            color: #c084fc;
        }

        .table td {
            background: #110d1b;
            color: white;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #9f96b2;
            border-top: 1px solid rgba(155, 92, 255, .12);
        }

        footer span {
            color: #c084fc;
        }

    </style>

</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar-saes">

        <div class="navbar-container">

            <a href="#" class="brand">

                <span class="terminal-dot"></span>

                SAES

            </a>

            <div class="nav-links">

                <a href="#">
                    <i class="bi bi-house"></i>
                    Inicio
                </a>

                <a href="#">
                    <i class="bi bi-ui-checks"></i>
                    Calificaciones
                </a>

                <a href="#">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Login
                </a>

            </div>

        </div>

    </nav>


    <!-- CONTENIDO -->

    <main class="contenido">

        <section class="tarjeta">

            <h1>

                <i class="bi bi-list-check"></i>

                Lista de Calificaciones

            </h1>


            <div class="table-responsive">

                <table class="table table-bordered">

                    <tr>

                        <th>ID Profesor</th>

                        <th>ID Alumno</th>

                        <th>ID Materia</th>

                        <th>ID Grupo</th>

                        <th>Calificación</th>

                    </tr>


                    <tr>

                        <td>1</td>

                        <td>101</td>

                        <td>10</td>

                        <td>2</td>

                        <td>9</td>

                    </tr>


                    <tr>

                        <td>2</td>

                        <td>102</td>

                        <td>11</td>

                        <td>2</td>

                        <td>8</td>

                    </tr>


                    <tr>

                        <td>3</td>

                        <td>103</td>

                        <td>12</td>

                        <td>1</td>

                        <td>10</td>

                    </tr>

                </table>

            </div>

        </section>

    </main>


    <!-- FOOTER -->

    <footer>

        <span>SAES</span>
        ·
        Sistema de Administración Escolar
        ·
        <span>ITGAMII</span>

    </footer>

</body>

</html>
```
