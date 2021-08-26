<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="css/main.css">
    <title>Sistema de caixa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

</head>
<body>
    <section class="is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title">SCC</h1>
                    <h1 class="subtitle">Sistema de contrle de caixa</h1>
                    <?php
                    if (isset($_SESSION['nAutenticado'])) :
                    ?>
                        <div class="notification is-warning">
                            <p>ERRO: Usuário ou senha inválidos.</p>
                        </div>
                    <?php endif; 
                    unset($_SESSION['nAutenticado']);
                    ?>
                    <div class="box">
                        <form action="login/login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-primary is-large">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>