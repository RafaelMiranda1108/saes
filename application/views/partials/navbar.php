<nav class="navbar-saes">
    <div class="navbar-container">

        <a href="<?= base_url(); ?>" class="brand">
            <span class="terminal-dot"></span>
            SAES
        </a>

        <span class="system-status">system.online</span>

        <div class="nav-links">
            <a href="<?= base_url(); ?>" class="<?= ($this->uri->segment(1) == '') ? 'active' : '' ?>">
                <i class="bi bi-house"></i> Inicio
            </a>
            <a href="#">
                <i class="bi bi-ui-checks"></i> Formulario
            </a>
            <a href="#">
                <i class="bi bi-box-arrow-in-right"></i> Login
            </a>
        </div>

    </div>
</nav>