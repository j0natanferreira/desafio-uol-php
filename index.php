<?php
    include_once("templates/header.php");
?>
    <main>
        <div class="title-container d-flex flex-row justify-content-between align-items-center">
            <div class="title">
                <h3>Listagem de Usuários</h3>
            </div>
            <a href="<?= $BASE_URL?>create_client.php" class="btn btn-warning">Novo Cliente</a>
        </div>
        <div class="title-container d-flex flex-column overflow-y-auto">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clients as $client): ?>
                        <tr>
                            <th scope="row"><?= $client["id"] ?></th>
                            <td><?= $client["name"] ?></td>
                            <td><?= $client["email"] ?></td>
                            <td><?= $client["cpf"] ?></td>
                            <td><?= $client["phone"] ?></td>
                            <td><?= $client["status"] ?></td>
                            <td class="d-flex gap-2">
                                <a href="<?= $BASE_URL ?>edit_client.php?id=<?= $client["id"]?>" class="btn btn-warning btn-sm">Editar</a>
                                <form action="<?= $BASE_URL?>/config/process.php?id=" method="POST">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?= $client["id"]?>">
                                    <button class="btn btn-outline-danger btn-sm btn">Excluir</button>
                                </form>
                            </td>
                        </tr>    
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p>Exibindo <?= count($clients) ?> clientes</p>
        </div>
    </main>

<?php
    include_once("templates/footer.php");
?>