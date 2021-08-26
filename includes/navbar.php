<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" style="text-decoration: none;">
            <h1>Bem vindo <?php echo strtoupper($_SESSION['usuario']) ?></h1>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbar" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item">
                Movimento G$
            </a>

            <a class="navbar-item">
                Movimento R$
            </a>

            <a class="navbar-item">
                Movimento US$
            </a>
        </div>

        <div class="navbar-end">

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Opções
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        cadastar usuario
                    </a>

                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        contatar o desenvolvedor
                    </a>
                </div>
            </div>
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary" href="login/logout.php">
                        <Strong>Sair</Strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>