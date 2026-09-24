<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SAES | ITGAMII</title>


    <!-- Bootstrap 5 -->
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

            position:
                sticky;

            top: 0;

            z-index: 1000;

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

            letter-spacing:
                .5px;

        }



        /* Puntito brillante */

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

            animation:
                pulse 2s infinite;

        }



        @keyframes pulse {

            0%,
            100% {

                opacity:
                    1;

                box-shadow:

                    0 0 6px
                    var(--purple),

                    0 0 14px
                    var(--purple);

            }

            50% {

                opacity:
                    .65;

                box-shadow:

                    0 0 4px
                    var(--purple),

                    0 0 8px
                    var(--purple);

            }

        }



        .brand span {

            color:
                var(--purple-light);

        }



        /* Estado del sistema */

        .system-status {

            color:
                var(--muted);

            font-family:
                "JetBrains Mono",
                "Fira Code",
                monospace;

            font-size:
                12px;

            margin-left:
                20px;

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
           ENCABEZADO PRINCIPAL
        ========================================= */

        .hero {

            max-width:
                1100px;

            margin:
                auto;

            padding:
                70px 20px 30px;

            text-align:
                center;

        }



        /* SAES */

        .saes-title {

            margin:
                0;

            font-family:
                "JetBrains Mono",
                "Fira Code",
                monospace;

            font-size:
                clamp(48px, 8vw, 82px);

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



        /* Puntito al lado del SAES */

        .saes-title .title-dot {

            display:
                inline-block;

            width:
                13px;

            height:
                13px;

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

            animation:
                pulse 2s infinite;

        }



        /* ITGAMII */

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
                16px;

            font-weight:
                600;

            letter-spacing:
                5px;

            text-transform:
                uppercase;

        }



        .instituto-line {

            width:
                70px;

            height:
                2px;

            margin:
                15px auto 0;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    var(--purple),
                    transparent
                );

        }



        /* =========================================
           CONTENIDO
        ========================================= */

        .contenido {

            max-width:
                1100px;

            min-height:
                50vh;

            margin:
                auto;

            padding:
                30px 20px 70px;

            display:
                flex;

            justify-content:
                center;

            align-items:
                center;

        }



        /* =========================================
           TARJETA
        ========================================= */

        .tarjeta {

            width:
                100%;

            max-width:
                700px;

            padding:
                45px;

            text-align:
                center;

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



        /* Brillo superior de la tarjeta */

        .tarjeta::before {

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

            opacity:
                .7;

        }



        /* =========================================
           IMAGEN
        ========================================= */

        .imagen-alumno {

            width:
                100%;

            max-width:
                460px;

            height:
                180px;

            object-fit:
                cover;

            margin-bottom:
                25px;

            border-radius:
                15px;

            border:
                1px solid
                var(--border);

            box-shadow:
                0 10px 35px
                rgba(0, 0, 0, .35);

        }



        /* =========================================
           TEXTO
        ========================================= */

        .tarjeta h1 {

            margin:
                0 0 10px;

            color:
                var(--text);

            font-size:
                30px;

            font-weight:
                700;

        }



        .tarjeta p {

            margin:
                0;

            color:
                var(--muted);

            font-size:
                16px;

        }



        .descripcion {

            margin-top:
                12px !important;

            font-size:
                14px !important;

            line-height:
                1.6;

        }



        /* =========================================
           BOTÓN
        ========================================= */

        .btn-saes {

            display:
                inline-flex;

            align-items:
                center;

            justify-content:
                center;

            gap:
                8px;

            margin-top:
                30px;

            padding:
                12px 25px;

            border:
                none;

            border-radius:
                12px;

            color:
                white;

            font-weight:
                600;

            text-decoration:
                none;

            background:
                linear-gradient(
                    135deg,
                    #7c3aed,
                    #a855f7
                );

            box-shadow:
                0 8px 25px
                rgba(124, 58, 237, .25);

            transition:
                all .2s ease;

        }



        .btn-saes:hover {

            color:
                white;

            transform:
                translateY(-2px);

            box-shadow:
                0 12px 30px
                rgba(124, 58, 237, .40);

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


            .hero {

                padding-top:
                    45px;

            }


            .tarjeta {

                padding:
                    30px 20px;

            }


            .imagen-alumno {

                height:
                    140px;

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


            <!-- MARCA -->

            <a
                href="<?= base_url(); ?>"
                class="brand"
            >

                <span class="terminal-dot"></span>

                SAES

            </a>


            <span class="system-status">

                system.online

            </span>


            <!-- LINKS -->

            <div class="nav-links">

                <a
                    href="<?= base_url(); ?>"
                    class="active"
                >

                    <i class="bi bi-house"></i>

                    Inicio

                </a>


                <a href="#">

                    <i class="bi bi-ui-checks"></i>

                    Formulario

                </a>


                <a href="#">

                    <i class="bi bi-box-arrow-in-right"></i>

                    Login

                </a>

            </div>


        </div>

    </nav>



    <!-- =========================================
         TÍTULO PRINCIPAL
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
         CONTENIDO
    ========================================== -->

    <main class="contenido">


        <section class="tarjeta">


            <!-- IMAGEN -->

            <img
                src="<?= base_url('assets/img/alum.jpg'); ?>"
                class="imagen-alumno"
                alt="Estudiantes del ITGAMII"
            >


            <!-- TÍTULO -->

            <h1>

                Sistema de Administración Escolar

            </h1>


            <!-- DESCRIPCIÓN -->

            <p>

                Plataforma de gestión académica del ITGAMII

            </p>


            <p class="descripcion">

                Consulta y administra información escolar
                de manera sencilla desde un solo lugar.

            </p>


            <!-- BOTÓN -->

            <a
                href="#"
                class="btn-saes"
            >

                <i class="bi bi-arrow-right-circle"></i>

                Comenzar

            </a>


        </section>


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



    <!-- =========================================
         BOOTSTRAP JS
    ========================================== -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>


</body>

</html>