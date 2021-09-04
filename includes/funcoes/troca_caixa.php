<?php
function trocaManduvi()
{
    if ($_SESSION['caixa'] == 'Manduvi') {
        unset($_SESSION['caixa']);
        $_SESSION['caixa'] = 'Pinturas';
    }
}

function trocaPinturas()
{
    if ($_SESSION['caixa'] == 'Pinturas') {
        unset($_SESSION['caixa']);
        $_SESSION['caixa'] = 'Manduvi';
    }
}

