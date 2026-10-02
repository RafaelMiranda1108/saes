<?php $this->load->view('partials/hero'); ?>

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

                <!-- NÚMERO DE CONTROL -->
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


                <!-- NOMBRES -->
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


                <!-- APELLIDO PATERNO -->
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


                <!-- APELLIDO MATERNO -->
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

                <!-- CORREO -->
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

                        <option
                            value=""
                            selected
                            disabled
                        >
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

                <!-- LIMPIAR -->
                <button
                    type="reset"
                    class="btn btn-secondary px-4"
                >
                    <i class="bi bi-arrow-counterclockwise"></i>
                    Limpiar
                </button>


                <!-- GUARDAR -->
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