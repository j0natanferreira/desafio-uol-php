<?php
    include_once("templates/header.php");
?>
    <main>
        <div class="title-container">
            <div class="title">
                <h3>Editar Usuário</h3>
                <p>Informe os campos a seguir para editar o usuário:</p>
            </div>
            <form action="<?= $BASE_URL?>config/process.php" method="POST" class="col-md-4">
                <input type="hidden" name="type" value="edit">
                <input type="hidden" name="id" value="<?= $client["id"]?>">

                <input type="text" name="name" class="form-control input" placeholder="Nome" value="<?= $client["name"] ?? ""?>" required>
                <input type="email" name="email" class="form-control input" value="<?= $client["email"] ?? ""?>" placeholder="E-mail" required>
                <input type="text" name="cpf" class="form-control input" value="<?= $client["cpf"] ?? ""?>" placeholder="CPF" required>
                <input type="text" name="phone" class="form-control input" value="<?= $client["phone"] ?? ""?>" placeholder="Telefone" required>
                <select name="status" class="form-select" value="<?= $client["status"] ?? ""?>" required>
                    <option value="" selected disabled>-- Status --</option>
                    <option value="🟢 Ativo">🟢 Ativo</option>
                    <option value="🔴 Inativo">🔴 Inativo</option>
                    <option value="🟠 Aguardando ativação">🟠 Aguardando ativação</option>
                    <option value="⚫ Desativado">⚫ Desativado</option>
                </select>
                <div class="pt-5">
                    <button type="submit" class="btn btn-warning btn-lg">Atualizar</button>
                    <a href="<?= $BASE_URL?>index.php" class="btn btn-outline-warning btn-lg" >Voltar</a>
                </div>
            </form>
        </div>
    </main>
<?php
    include_once("templates/footer.php");
?>
