<?php
include 'cadastrar.php';
?>
<main class="container has-text-centered">
    <br>
    <section>
        <center>
            <button class="button modal-button is-white is-rounded" data-target="modal-id" aria-haspopup="true">
                <ion-icon name="add-circle-outline" size='large'></ion-icon> Cadastrar movimento
            </button>
            <a href="cadastrar.php">
                <button class="button is-white is-rounded">
                    <ion-icon name="search-circle-outline" size='large'></ion-icon> consultar movimento
                </button>
            </a>
            <button class="button modal-button is-white is-rounded" data-target="modal-id" aria-haspopup="true">
                <ion-icon name="refresh-circle-outline" size='large'></ion-icon> atualizar movimento
            </button>
            <button class="button modal-button is-white is-rounded" data-target="modal-id" aria-haspopup="true">
                <ion-icon name="close-circle-outline" size='large'></ion-icon> deletar movimento
            </button>
        </center>
    </section>
</main>