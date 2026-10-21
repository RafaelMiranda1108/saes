<?php $this->load->view('partials/hero'); ?>

<main class="container py-5">
    <section class="form-card text-center mx-auto" style="max-width: 850px;">
        <p class="text-uppercase small mb-2" style="letter-spacing: .18em; color: #9b5cff;">Sistema escolar</p>
        <h1 class="form-title">SAES</h1>
        <p class="form-subtitle">
            Sistema de Administración Escolar del ITGAMII.
        </p>
        <p class="mb-4">
            Administra los registros académicos y consulta la información escolar desde un solo lugar.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a class="btn-purple text-decoration-none" href="<?= site_url('Alumnos_froms'); ?>">
                <i class="bi bi-people"></i> Registro de alumnos
            </a>
            <a class="btn-outline-darkmode text-decoration-none" href="<?= site_url('Usuarios_froms/login'); ?>">
                <i class="bi bi-box-arrow-in-right"></i> Iniciar sesión
            </a>
        </div>
    </section>
</main>
