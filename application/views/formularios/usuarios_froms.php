<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Usuarios | SAES</title>

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

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            color: var(--text);

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

            font-family: Arial, Helvetica, sans-serif;
        }

        /* NAVBAR */
        .navbar {
            background: rgba(9, 7, 15, .82);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(12px);
        }

        .navbar-brand {
            color: var(--text) !important;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .terminal-dot {
            display: inline-block;
            width: 9px;
            height: 9px;
            margin-right: 7px;

            background: var(--purple);
            border-radius: 50%;

            box-shadow:
                0 0 8px var(--purple),
                0 0 18px rgba(155, 92, 255, .7);
        }

        .system-online {
            color: var(--muted);
            font-size: .75rem;
            margin-left: 5px;
        }

        .navbar .nav-link {
            color: var(--muted);
            transition: .2s;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: var(--purple-light);
        }

        /* HEADER */
        .page-header {
            text-align: center;
            margin-top: 55px;
            margin-bottom: 30px;
        }

        .saes-title {
            font-size: 2.5rem;
            font-weight: 800;
            letter-spacing: 3px;
        }

        .saes-title .terminal-dot {
            width: 12px;
            height: 12px;
            margin-right: 10px;
            vertical-align: middle;
        }

        .institution {
            margin-top: 5px;
            color: var(--muted);
            font-size: .95rem;
            letter-spacing: 4px;
        }

        .title-line {
            width: 80px;
            height: 3px;
            margin: 15px auto 0;

            background: linear-gradient(
                90deg,
                #7c3aed,
                #c084fc
            );

            border-radius: 10px;
            box-shadow: 0 0 15px rgba(155, 92, 255, .6);
        }

        /* FORM CARD */
        .form-card {
            max-width: 900px;
            margin: 0 auto 50px;

            padding: 35px;

            background:
                linear-gradient(
                    145deg,
                    rgba(23, 16, 34, .96),
                    rgba(17, 13, 27, .96)
                );

            border: 1px solid var(--border);
            border-radius: 22px;

            box-shadow:
                0 20px 60px rgba(0, 0, 0, .35),
                0 0 30px rgba(126, 34, 206, .08);
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;

            margin-bottom: 20px;

            color: var(--purple-light);
            font-size: 1.1rem;
            font-weight: 700;
        }

        .section-title i {
            color: var(--purple);
        }

        .form-label {
            color: #ddd6fe;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .input-group-text {
            color: var(--purple-light);

            background: #0d0915;
            border: 1px solid var(--border);
            border-right: none;
        }

        .form-control,
        .form-select {
            color: var(--text);

            background: #0d0915;
            border: 1px solid var(--border);

            padding: 11px 13px;
        }

        .input-group .form-control {
            border-left: none;
        }

        .form-control::placeholder {
            color: #71687f;
        }

        .form-control:focus,
        .form-select:focus {
            color: var(--text);
            background: #0d0915;

            border-color: var(--purple);

            box-shadow:
                0 0 0 .2rem rgba(155, 92, 255, .12),
                0 0 15px rgba(155, 92, 255, .08);
        }

        .form-select option {
            background: #110d1b;
            color: var(--text);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 110px;
        }

        /* INFO BOX */
        .info-box {
            margin-top: 25px;
            padding: 15px 18px;

            background: rgba(155, 92, 255, .06);
            border: 1px solid var(--border);
            border-radius: 14px;

            color: var(--muted);
        }

        .info-box i {
            color: var(--purple-light);
            margin-right: 7px;
        }

        /* BUTTONS */
        .btn-primary {
            border: none;

            background: linear-gradient(
                135deg,
                #7c3aed,
                #a855f7
            );

            box-shadow:
                0 8px 20px rgba(124, 58, 237, .25);
        }

        .btn-primary:hover {
            background: linear-gradient(
                135deg,
                #8b5cf6,
                #c084fc
            );
        }

        .btn-secondary {
            color: var(--text);

            background: #171022;
            border: 1px solid var(--border);
        }

        .btn-secondary:hover {
            color: white;
            background: #211731;
            border-color: var(--purple);
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 25px;

            color: var(--muted);
            font-size: .85rem;

            border-top: 1px solid rgba(155, 92, 255, .12);
        }

        @media (max-width: 768px) {

            .form-card {
                margin: 0 15px 40px;
                padding: 25px 20px;
            }

            .saes-title {
                font-size: 2rem;
            }

            .page-header {
                margin-top: 35px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand" href="<?= base_url(); ?>">
            <span class="terminal-dot"></span>
            SAES
            <span class="system-online">system.online</span>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>">
                        <i class="bi bi-house"></i>
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('alumnos'); ?>">
                        <i class="bi bi-mortarboard"></i>
                        Alumnos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('profesores'); ?>">
                        <i class="bi bi-person-badge"></i>
                        Profesores
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('usuarios'); ?>">
                        <i class="bi bi-people"></i>
                        Usuarios
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>


<!-- HEADER -->
<header class="page-header">

    <div class="saes-title">
        <span class="terminal-dot"></span>
        SAES
    </div>

    <div class="institution">
        ITGAMII
    </div>

    <div class="title-line"></div>

</header>


<!-- FORMULARIO -->
<main class="container">

    <div class="form-card">

        <form
            action="<?= base_url('usuarios/guardar'); ?>"
            method="POST"
        >

            <!-- DATOS DEL USUARIO -->
            <div class="section-title">
                <i class="bi bi-person-circle"></i>
                Datos del usuario
            </div>

            <div class="row g-3">

                <!-- Número de control -->
                <div class="col-md-6">

                    <label
                        for="numero_control"
                        class="form-label"
                    >
                        Número de control
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-card-text"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            id="numero_control"
                            name="numero_control"
                            maxlength="15"
                            placeholder="Número de control"
                            required
                        >

                    </div>

                </div>


                <!-- Nombres -->
                <div class="col-md-6">

                    <label
                        for="nombres_usu"
                        class="form-label"
                    >
                        Nombre(s)
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            id="nombres_usu"
                            name="nombres_usu"
                            placeholder="Nombre(s)"
                            required
                        >

                    </div>

                </div>


                <!-- Apellido paterno -->
                <div class="col-md-6">

                    <label
                        for="apellido_paterno"
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
                            id="apellido_paterno"
                            name="apellido_paterno"
                            placeholder="Apellido paterno"
                            required
                        >

                    </div>

                </div>


                <!-- Apellido materno -->
                <div class="col-md-6">

                    <label
                        for="apellido_materno"
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
                            id="apellido_materno"
                            name="apellido_materno"
                            placeholder="Apellido materno"
                            required
                        >

                    </div>

                </div>

            </div>


            <!-- INFORMACIÓN DE CONTACTO -->
            <div class="section-title mt-5">
                <i class="bi bi-envelope"></i>
                Información de contacto
            </div>

            <div class="row g-3">

                <!-- Correo -->
                <div class="col-12">

                    <label
                        for="correo"
                        class="form-label"
                    >
                        Correo electrónico
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input
                            type="email"
                            class="form-control"
                            id="correo"
                            name="correo"
                            placeholder="ejemplo@correo.com"
                            required
                        >

                    </div>

                </div>

            </div>


            <!-- ROL -->
            <div class="section-title mt-5">
                <i class="bi bi-shield-lock"></i>
                Rol del usuario
            </div>

            <div class="row g-3">

                <div class="col-md-6">

                    <label
                        for="rol"
                        class="form-label"
                    >
                        Tipo de usuario
                    </label>

                    <select
                        class="form-select"
                        id="rol"
                        name="rol"
                        required
                    >

                        <option value="" selected disabled>
                            Selecciona un rol
                        </option>

                        <option value="Alumno">
                            Alumno
                        </option>

                        <option value="Docente">
                            Docente
                        </option>

                        <option value="Admin">
                            Administrador
                        </option>

                        <option value="Cocinero">
                            Cocinero
                        </option>

                    </select>

                </div>

            </div>


            <!-- INFORMACIÓN -->
            <div class="info-box">

                <i class="bi bi-info-circle"></i>

                El usuario será registrado en el sistema SAES
                con el rol seleccionado.

            </div>


            <!-- BOTONES -->
            <div class="d-flex justify-content-end gap-2 mt-4">

                <button
                    type="reset"
                    class="btn btn-secondary px-4"
                >
                    <i class="bi bi-arrow-counterclockwise"></i>
                    Limpiar
                </button>

                <button
                    type="submit"
                    class="btn btn-primary px-4"
                >
                    <i class="bi bi-person-plus"></i>
                    Guardar usuario
                </button>

            </div>

        </form>

    </div>

</main>


<!-- FOOTER -->
<footer>
    SAES · Sistema de Administración Escolar · ITGAMII
</footer>

</body>
</html>
```
