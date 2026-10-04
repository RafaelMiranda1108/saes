<nav class="navbar-saes">
    <div class="navbar-container">

        <a href="<?= base_url(); ?>" class="brand">
            <span class="terminal-dot"></span>
            SAES
        </a>

        <span class="system-status">system.online</span>

        <div class="nav-links">

            <a href="<?= base_url(); ?>" class="<?= ($this->uri->segment(1) == '') ? 'active' : '' ?>">
                <i class="bi bi-house"></i>
                <span>Inicio</span>
            </a>

            <a href="<?= base_url('alumnos_froms'); ?>" class="<?= ($this->uri->segment(1) == 'alumnos_froms') ? 'active' : '' ?>">
                <i class="bi bi-people"></i>
                <span>Alumnos</span>
            </a>

            <a href="<?= base_url('profesores_froms'); ?>" class="<?= ($this->uri->segment(1) == 'profesores_froms') ? 'active' : '' ?>">
                <i class="bi bi-person-badge"></i>
                <span>Profesores</span>
            </a>

            <a href="<?= base_url('materias'); ?>" class="<?= ($this->uri->segment(1) == 'materias') ? 'active' : '' ?>">
                <i class="bi bi-book"></i>
                <span>Materias</span>
            </a>

            <a href="<?= base_url('registro_calif'); ?>" class="<?= ($this->uri->segment(1) == 'registro_calif') ? 'active' : '' ?>">
                <i class="bi bi-journal-check"></i>
                <span>Calificaciones</span>
            </a>

        </div>

    </div>
</nav>