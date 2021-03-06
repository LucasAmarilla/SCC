<?php
//back_end
session_start();

//Verificador de caixa
if (!isset($_SESSION['caixa'])) {
    $_SESSION['caixa'] = 'manduvi'; //caixa_default
}
include 'login/verifica_login.php'; //verificador_de_login
include 'includes/modais_crud/formulario_cadastro.php'; //modal_cadastro


//Elementos da UI
include('includes/header.php');
include('includes/crud_buttons.php');
include('includes/footer.php');

?>

<html>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
<script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>