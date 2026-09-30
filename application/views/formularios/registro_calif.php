<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SAES | Registro de Calificaciones</title>

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
            max-width: 900px;
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

        label {
            color: #c084fc;
            margin-bottom: 8px;
        }

        .form-control {
            background: #171022;
            border: 1px solid rgba(155, 92, 255, 0.25);
            color: white;
        }

        .form-control:focus {
            background: #171022;
            color: white;
            border-color: #9b5cff;
        }

        .btn-saes {
            background: linear-gradient(135deg, #7c3aed, #a855f7);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 12px;
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

                <a href="#" class="active">
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

                <i class="bi bi-pencil-square"></i>

                Registro de Calificaciones

            </h1>


            <form>

                <label>ID Profesor</label>

                <input
                    type="text"
                    class="form-control"
                >

                <br>


                <label>ID Alumno</label>

                <input
                    type="text"
                    class="form-control"
                >

                <br>


                <label>ID Materia</label>

                <input
                    type="text"
                    class="form-control"
                >

                <br>


                <label>ID Grupo</label>

                <input
                    type="text"
                    class="form-control"
                >

                <br>


                <label>Calificación</label>

                <input
                    type="text"
                    class="form-control"
                >

                <br>


                <div class="text-center">

                    <button
                        type="submit"
                        class="btn-saes"
                    >

                        <i class="bi bi-save"></i>

                        Guardar Calificación

                    </button>

                </div>

            </form>

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
