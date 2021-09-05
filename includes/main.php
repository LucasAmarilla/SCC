<main class="container has-text-centered">
    <br>
    <section>
        <center>
            <h1 class="title is-1">SCC</h1>
            <h2 class="subtitle">Sistema de controle de caixa</h2>
            <h2 class="subtitle">Você está no caixa de <?php echo $_SESSION['caixa']; ?></h2>
            <button class="button modal-button is-white is-rounded" data-target="cadastar_modal" aria-haspopup="true">
                <ion-icon name="add-circle-outline" size='large'></ion-icon> cadastrar movimento
            </button>

            <button class="button modal-button is-white is-rounded" data-target="consulta_modal" aria-haspopup="true">
                <ion-icon name="search-circle-outline" size='large'></ion-icon> consultar movimento
            </button>

            <button class="button modal-button is-white is-rounded" data-target="modal-id" aria-haspopup="true">
                <ion-icon name="refresh-circle-outline" size='large'></ion-icon> modificar movimento
            </button>
            <button class="button modal-button is-white is-rounded" data-target="modal-id" aria-haspopup="true">
                <ion-icon name="close-circle-outline" size='large'></ion-icon> deletar movimento
            </button>
            <br>
            <br>
        </center>
    </section>
</main>