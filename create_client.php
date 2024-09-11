<?php
    include_once("templates/header.php");
?>
    <main>
        <div class="title-container">
            <div class="title">
                <h3>Novo Usuário</h3>
                <p>Informe os campos a seguir para criar novo usuário:</p>
            </div>
            <form action="<?= $BASE_URL?>config/process.php" method="POST" class="col-md-4">
                <input type="hidden" name="type" value="create">
                <input type="text" name="name" class="form-control input" placeholder="Nome" required>
                <input type="email" name="email" class="form-control input" placeholder="E-mail" required>
                <input type="text" name="cpf" class="form-control input" placeholder="CPF" maxlength="11" required>
                <input type="text" name="phone" class="form-control input" placeholder="Telefone" maxlength="11" required>
                <select name="status" class="form-select" required>
                    <option value="" selected disabled>-- Status --</option>
                    <option value="🟢 Ativo">🟢 Ativo</option>
                    <option value="🔴 Inativo">🔴 Inativo</option>
                    <option value="🟠 Aguardando ativação">🟠 Aguardando ativação</option>
                    <option value="⚫ Desativado">⚫ Desativado</option>
                </select>
                <div class="pt-5">
                    <button type="submit" class="btn btn-warning btn-lg">Criar</button>
                    <a href="<?= $BASE_URL?>index.php" class="btn btn-outline-warning btn-lg" >Voltar</a>
                </div>
            </form>
        </div>
    </main>
<?php
    include_once("templates/footer.php");
?>