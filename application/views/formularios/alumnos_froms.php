<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Alumnos | SAES</title>


    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    <style>

        /* =========================================
           VARIABLES
        ========================================= */

        :root {

            --bg: #09070f;
            --card: #110d1b;
            --card-2: #171022;

            --purple: #9b5cff;
            --purple-light: #c084fc;

            --border: rgba(155, 92, 255, 0.25);

            --text: #f5f3ff;
            --muted: #9f96b2;

        }



        /* =========================================
           BODY
        ========================================= */

        body {

            margin: 0;

            min-height: 100vh;

            color: var(--text);

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background:

                radial-gradient(
                    circle at 20% 20%,
                    rgba(126, 34, 206, .18),
                    transparent 30%
                ),

                radial-gradient(
                    circle at 80% 80%,
                    rgba(168, 85, 247, .12),
                    transparent 30%
                ),

                var(--bg);

        }



        /* =========================================
           NAVBAR
        ========================================= */

        .navbar-saes {

            background:
                rgba(9, 7, 15, .82);

            border-bottom:
                1px solid
                var(--border);

            backdrop-filter:
                blur(12px);

            -webkit-backdrop-filter:
                blur(12px);

            padding:
                14px 25px;

        }



        .navbar-container {

            max-width:
                1100px;

            margin:
                auto;

            display:
                flex;

            align-items:
                center;

            justify-content:
                space-between;

        }



        /* =========================================
           MARCA SAES
        ========================================= */

        .brand {

            display:
                flex;

            align-items:
                center;

            gap:
                10px;

            text-decoration:
                none;

            color:
                var(--text);

            font-family:
                "JetBrains Mono",
                "Fira Code",
                monospace;

            font-size:
                20px;

            font-weight:
                700;

        }



        /* Punto brillante */

        .terminal-dot {

            width:
                10px;

            height:
                10px;

            background:
                var(--purple);

            border-radius:
                50%;

            display:
                inline-block;

            box-shadow:

                0 0 6px
                var(--purple),

                0 0 14px
                var(--purple),

                0 0 25px
                rgba(155, 92, 255, .8);

        }



        /* =========================================
           ESTADO DEL SISTEMA
        ========================================= */

        .system-status {

            color:
                var(--muted);

            font-family:
                "JetBrains Mono",
                "Fira Code",
                monospace;

            font-size:
                12px;

        }



        .system-status::before {

            content:
                "●";

            color:
                var(--purple);

            margin-right:
                6px;

        }



        /* =========================================
           NAVEGACIÓN
        ========================================= */

        .nav-links {

            display:
                flex;

            align-items:
                center;

            gap:
                5px;

        }



        .nav-links a {

            color:
                var(--muted);

            text-decoration:
                none;

            padding:
                9px 14px;

            border-radius:
                10px;

            transition:
                all .2s ease;

            font-size:
                14px;

        }



        .nav-links a:hover {

            color:
                var(--text);

            background:
                rgba(155, 92, 255, .10);

        }



        .nav-links a.active {

            color:
                white;

            background:
                rgba(139, 92, 246, .22);

            border:
                1px solid
                rgba(155, 92, 255, .25);

        }



        /* =========================================
           ENCABEZADO
        ========================================= */

        .hero {

            max-width:
                1100px;

            margin:
                auto;

            padding:
                45px 20px 20px;

            text-align:
                center;

        }



        .saes-title {

            margin:
                0;

            font-family:
                "JetBrains Mono",
                "Fira Code",
                monospace;

            font-size:
                clamp(42px, 7vw, 65px);

            font-weight:
                800;

            letter-spacing:
                -3px;

            color:
                var(--text);

            text-shadow:
                0 0 20px
                rgba(155, 92, 255, .20);

        }



        /* Punto del título */

        .title-dot {

            display:
                inline-block;

            width:
                12px;

            height:
                12px;

            margin-right:
                8px;

            vertical-align:
                middle;

            background:
                var(--purple);

            border-radius:
                50%;

            box-shadow:

                0 0 7px
                var(--purple),

                0 0 16px
                var(--purple),

                0 0 35px
                rgba(155, 92, 255, .8);

        }



        .instituto {

            margin-top:
                5px;

            color:
                var(--purple-light);

            font-family:
                "JetBrains Mono",
                "Fira Code",
                monospace;

            font-size:
                15px;

            font-weight:
                600;

            letter-spacing:
                5px;

        }



        .instituto-line {

            width:
                70px;

            height:
                2px;

            margin:
                14px auto 0;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    var(--purple),
                    transparent
                );

        }



        /* =========================================
           CONTENEDOR
        ========================================= */

        .form-container {

            max-width:
                900px;

            margin:
                0 auto;

            padding:
                20px 20px 70px;

        }



        /* =========================================
           TARJETA
        ========================================= */

        .form-card {

            background:

                linear-gradient(
                    145deg,
                    rgba(23, 16, 34, .96),
                    rgba(13, 10, 21, .96)
                );

            border:
                1px solid
                var(--border);

            border-radius:
                22px;

            padding:
                40px;

            box-shadow:

                0 20px 60px
                rgba(0, 0, 0, .45),

                0 0 35px
                rgba(126, 34, 206, .08);

            position:
                relative;

            overflow:
                hidden;

        }



        .form-card::before {

            content:
                "";

            position:
                absolute;

            top:
                0;

            left:
                15%;

            width:
                70%;

            height:
                1px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    var(--purple),
                    transparent
                );

        }



        /* =========================================
           TÍTULO
        ========================================= */

        .form-title {

            color:
                var(--text);

            font-size:
                28px;

            font-weight:
                700;

            margin-bottom:
                8px;

        }



        .form-subtitle {

            color:
                var(--muted);

            margin-bottom:
                35px;

            font-size:
                14px;

        }



        /* =========================================
           SECCIONES
        ========================================= */

        .section-title {

            color:
                var(--purple-light);

            font-family:
                "JetBrains Mono",
                "Fira Code",
                monospace;

            font-size:
                12px;

            font-weight:
                700;

            text-transform:
                uppercase;

            letter-spacing:
                1.5px;

            margin:
                30px 0 18px;

            padding-bottom:
                8px;

            border-bottom:
                1px solid
                rgba(155, 92, 255, .12);

        }



        /* =========================================
           LABELS
        ========================================= */

        .form-label {

            color:
                var(--text);

            font-size:
                13px;

            font-weight:
                600;

            margin-bottom:
                8px;

        }



        /* =========================================
           INPUTS
        ========================================= */

        .form-control,
        .form-select {

            background:
                #0d0915;

            color:
                var(--text);

            border:
                1px solid
                rgba(155, 92, 255, .18);

            border-radius:
                12px;

            padding:
                12px 14px;

            min-height:
                48px;

            transition:
                all .2s ease;

        }



        .form-control::placeholder {

            color:
                #71687f;

        }



        .form-control:focus,
        .form-select:focus {

            background:
                #0d0915;

            color:
                var(--text);

            border-color:
                var(--purple);

            box-shadow:
                0 0 0 3px
                rgba(155, 92, 255, .12);

        }



        .form-select option {

            background:
                #110d1b;

            color:
                var(--text);

        }



        textarea.form-control {

            min-height:
                110px;

            resize:
                vertical;

        }



        /* =========================================
           ICONOS DE INPUT
        ========================================= */

        .input-group-text {

            background:
                #0d0915;

            color:
                var(--purple-light);

            border:
                1px solid
                rgba(155, 92, 255, .18);

            border-right:
                none;

            border-radius:
                12px 0 0 12px;

        }



        .input-group .form-control {

            border-left:
                none;

            border-radius:
                0 12px 12px 0;

        }



        .input-group .form-select {

            border-left:
                none;

            border-radius:
                0 12px 12px 0;

        }



        /* =========================================
           CAJA DE ESTADO
        ========================================= */

        .status-box {

            background:
                rgba(155, 92, 255, .07);

            border:
                1px solid
                rgba(155, 92, 255, .18);

            border-radius:
                14px;

            padding:
                15px;

            margin-top:
                20px;

        }



        .status-dot {

            display:
                inline-block;

            width:
                8px;

            height:
                8px;

            background:
                var(--purple);

            border-radius:
                50%;

            margin-right:
                8px;

            box-shadow:
                0 0 8px
                var(--purple);

        }



        .status-text {

            color:
                var(--muted);

            font-family:
                "JetBrains Mono",
                "Fira Code",
                monospace;

            font-size:
                12px;

        }



        /* =========================================
           BOTÓN MORADO
        ========================================= */

        .btn-purple {

            background:
                linear-gradient(
                    135deg,
                    #7c3aed,
                    #a855f7
                );

            color:
                white;

            border:
                none;

            border-radius:
                12px;

            padding:
                12px 22px;

            font-weight:
                600;

            box-shadow:
                0 8px 25px
                rgba(124, 58, 237, .25);

            transition:
                all .2s ease;

        }



        .btn-purple:hover {

            color:
                white;

            transform:
                translateY(-2px);

            box-shadow:
                0 12px 30px
                rgba(124, 58, 237, .40);

        }



        /* =========================================
           BOTÓN LIMPIAR
        ========================================= */

        .btn-outline-darkmode {

            background:
                transparent;

            color:
                var(--muted);

            border:
                1px solid
                rgba(155, 92, 255, .18);

            border-radius:
                12px;

            padding:
                12px 22px;

            font-weight:
                600;

            transition:
                all .2s ease;

        }



        .btn-outline-darkmode:hover {

            color:
                var(--text);

            border-color:
                var(--purple);

            background:
                rgba(155, 92, 255, .07);

        }



        /* =========================================
           FOOTER
        ========================================= */

        footer {

            text-align:
                center;

            padding:
                25px 20px;

            color:
                var(--muted);

            font-family:
                "JetBrains Mono",
                "Fira Code",
                monospace;

            font-size:
                12px;

            border-top:
                1px solid
                rgba(155, 92, 255, .12);

        }



        footer span {

            color:
                var(--purple-light);

        }



        /* =========================================
           RESPONSIVE
        ========================================= */

        @media (max-width: 768px) {

            .navbar-container {

                flex-direction:
                    column;

                gap:
                    12px;

            }


            .nav-links {

                flex-wrap:
                    wrap;

                justify-content:
                    center;

            }


            .system-status {

                display:
                    none;

            }


            .form-card {

                padding:
                    25px 20px;

            }


            .hero {

                padding-top:
                    35px;

            }

        }

    </style>

</head>



<body>


    <!-- =========================================
         NAVBAR
    ========================================== -->

    <nav class="navbar-saes">

        <div class="navbar-container">


            <!-- LOGO / MARCA -->

            <a
                href="<?= base_url(); ?>"
                class="brand"
            >

                <span class="terminal-dot"></span>

                SAES

            </a>


            <!-- ESTADO -->

            <span class="system-status">

                system.online

            </span>


            <!-- MENÚ -->

            <div class="nav-links">

                <a href="<?= base_url(); ?>">

                    <i class="bi bi-house"></i>

                    Inicio

                </a>


                <a
                    href="#"
                    class="active"
                >

                    <i class="bi bi-person-vcard"></i>

                    Alumnos

                </a>


                <a href="#">

                    <i class="bi bi-box-arrow-in-right"></i>

                    Login

                </a>

            </div>


        </div>

    </nav>



    <!-- =========================================
         TÍTULO SAES / ITGAMII
    ========================================== -->

    <header class="hero">


        <h1 class="saes-title">

            <span class="title-dot"></span>

            SAES

        </h1>


        <div class="instituto">

            ITGAMII

        </div>


        <div class="instituto-line"></div>


    </header>



    <!-- =========================================
         FORMULARIO
    ========================================== -->

    <main class="form-container">


        <div class="form-card">


            <!-- TÍTULO -->

            <h1 class="form-title">

                Formulario de Alumnos

            </h1>


            <p class="form-subtitle">

                Registro de información académica y personal del alumno.

            </p>



            <form>


                <!-- =================================
                     DATOS PERSONALES
                ================================== -->

                <div class="section-title">

                    <i class="bi bi-person"></i>

                    Datos personales

                </div>



                <div class="row">


                    <!-- NOMBRE -->

                    <div class="col-md-4 mb-3">

                        <label
                            for="nombre"
                            class="form-label"
                        >

                            Nombre del alumno

                        </label>


                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-person"></i>

                            </span>


                            <input
                                type="text"
                                class="form-control"
                                id="nombre"
                                name="nombre"
                                placeholder="Nombre"
                                required
                            >

                        </div>

                    </div>



                    <!-- APELLIDO PATERNO -->

                    <div class="col-md-4 mb-3">

                        <label
                            for="apellidoPaterno"
                            class="form-label"
                        >

                            Apellido paterno

                        </label>


                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-person"></i>

                            </span>


                            <input
                                type="text"
                                class="form-control"
                                id="apellidoPaterno"
                                name="apellidoPaterno"
                                placeholder="Apellido paterno"
                                required
                            >

                        </div>

                    </div>



                    <!-- APELLIDO MATERNO -->

                    <div class="col-md-4 mb-3">

                        <label
                            for="apellidoMaterno"
                            class="form-label"
                        >

                            Apellido materno

                        </label>


                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-person"></i>

                            </span>


                            <input
                                type="text"
                                class="form-control"
                                id="apellidoMaterno"
                                name="apellidoMaterno"
                                placeholder="Apellido materno"
                                required
                            >

                        </div>

                    </div>


                </div>



                <!-- =================================
                     INFORMACIÓN ESCOLAR
                ================================== -->

                <div class="section-title">

                    <i class="bi bi-mortarboard"></i>

                    Información escolar

                </div>



                <div class="row">


                    <!-- MATRÍCULA -->

                    <div class="col-md-6 mb-3">

                        <label
                            for="matricula"
                            class="form-label"
                        >

                            Matrícula

                        </label>


                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-card-text"></i>

                            </span>


                            <input
                                type="text"
                                class="form-control"
                                id="matricula"
                                name="matricula"
                                placeholder="Matrícula"
                                required
                            >

                        </div>

                    </div>



                    <!-- ESTATUS -->

                    <div class="col-md-6 mb-3">

                        <label
                            for="estatus"
                            class="form-label"
                        >

                            Estatus del alumno

                        </label>


                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-toggle-on"></i>

                            </span>


                            <select
                                class="form-select"
                                id="estatus"
                                name="estatus"
                                required
                            >

                                <option
                                    value=""
                                    selected
                                    disabled
                                >

                                    Selecciona el estatus

                                </option>


                                <option value="1">

                                    Activo

                                </option>


                                <option value="2">

                                    Inactivo

                                </option>

                            </select>

                        </div>

                    </div>


                </div>



                <!-- =================================
                     CONTACTO
                ================================== -->

                <div class="section-title">

                    <i class="bi bi-telephone"></i>

                    Información de contacto

                </div>



                <!-- TELÉFONO -->

                <div class="mb-3">

                    <label
                        for="telefono"
                        class="form-label"
                    >

                        Teléfono

                    </label>


                    <div class="input-group">

                        <span class="input-group-text">

                            <i class="bi bi-telephone"></i>

                        </span>


                        <input
                            type="tel"
                            class="form-control"
                            id="telefono"
                            name="telefono"
                            placeholder="Número telefónico"
                        >

                    </div>

                </div>



                <!-- DOMICILIO -->

                <div class="mb-3">

                    <label
                        for="domicilio"
                        class="form-label"
                    >

                        Domicilio

                    </label>


                    <div class="input-group">

                        <span
                            class="input-group-text
                                   align-items-start
                                   pt-3"
                        >

                            <i class="bi bi-house"></i>

                        </span>


                        <textarea
                            class="form-control"
                            id="domicilio"
                            name="domicilio"
                            placeholder="Domicilio completo"
                            rows="4"
                        ></textarea>

                    </div>

                </div>



                <!-- =================================
                     ESTADO
                ================================== -->

                <div class="status-box">

                    <span class="status-dot"></span>

                    <span class="status-text">

                        Listo para registrar alumno

                    </span>

                </div>



                <!-- =================================
                     BOTONES
                ================================== -->

                <div
                    class="d-flex
                           flex-wrap
                           gap-2
                           justify-content-end
                           mt-4"
                >


                    <!-- LIMPIAR -->

                    <button
                        type="reset"
                        class="btn-outline-darkmode"
                    >

                        <i class="bi bi-arrow-counterclockwise"></i>

                        Limpiar

                    </button>


                    <!-- GUARDAR -->

                    <button
                        type="submit"
                        class="btn-purple"
                    >

                        <i class="bi bi-person-plus"></i>

                        Guardar alumno

                    </button>


                </div>


            </form>


        </div>


    </main>



    <!-- =========================================
         FOOTER
    ========================================== -->

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
