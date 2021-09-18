<!-- Modal de cadastro -->
<div id="cadastar_modal" class="modal  modal-fx-fadeInScale" ;>
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Cadastrar Movimento</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <div class="box">
                <form action="cadastrar.php" method="POST">
                    <label class="title is-4">Data:</label>
                    <input class="is-rounded is-primary" type="date" id="data" name="data" min="2021-01-01" max="2090-01-30">
                    <br>
                    <br>
                    <label for="sel1" class="title is-4">Tipo: </label>
                    <div class="select is-rounded is-primary">
                        <select id="tipo" name="tipo">
                            <option value='entrada'>Entrada</option>
                            <option value='saida'>Saida</option>
                        </select>
                    </div>
                    <br>
                    <br>
                    <label class="title is-4">Motivo:</label>
                    <br>
                    <input class="input is-medium is-primary" type="text" id="motivo" name="motivo" placeholder="">
                    <br>
                    <br>
                    <label class="title is-4">Moeda:</label>
                    <div class="select is-rounded is-primary">
                        <select id="moeda" name="moeda">
                            <option value="guarani">Guarani</option>
                            <option value="real">Real</option>
                            <option value="dolar">Dolar</option>
                        </select>
                    </div>
                    <br>
                    <br>
                    <label class="title is-4">Valor:</label>
                    <br>
                    <input class="input is-medium is-primary" type="text" id="valor" name="valor" placeholder="">
                    <br>
                    <br>
                    <button type="submit" class="button is-rounded is-primary">Cadastrar movimento</button>
                </form>

            </div>
        </section>
    </div>
</div>

<!-- Modal de consulta -->
<div id="consultar_modal" class="modal  modal-fx-fadeInScale" ;>
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Consultar Movimento</p>
        </header>
        <section class="modal-card-body">
            <div class="box">
                <center>
                    <form action="consultar.php" method="POST">
                        <label class="title is-4">Data inicial:</label>
                        <input class="is-rounded is-primary" type="date" id="data" name="data" min="2021-01-01" max="2090-01-30">
                        <br>
                        <br>
                        <label class="title is-4">Data final:</label>
                        <input class="is-rounded is-primary" type="date" id="data" name="data" min="2021-01-01" max="2090-01-30">
                        <br>
                        <br>
                        <button type="submit" class="button is-rounded is-primary">Consultar movimento</button>
                </center>
                </form>
            </div>
        </section>
    </div>
</div>

<!-- Modal de alteracao -->


<!-- Modal de delete -->
