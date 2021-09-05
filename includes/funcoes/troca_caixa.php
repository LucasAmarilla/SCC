<?php
function trocaManduvi()
{
    if ($_SESSION['caixa'] == 'manduvi') {
        unset($_SESSION['caixa']);
        $_SESSION['caixa'] = 'pinturas';
    }
}

function trocaPinturas()
{
    if ($_SESSION['caixa'] == 'pinturas') {
        unset($_SESSION['caixa']);
        $_SESSION['caixa'] = 'manduvi';
    }
}
