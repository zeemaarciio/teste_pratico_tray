<?php require 'app/config.php';

$lista = [];

$sql = $pdo->query("SELECT * FROM sellers ORDER BY id");

if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    //echo "Nenhum registro encontrado!";
    echo '<div class="alert alert-danger" role="alert">
            Nenhum registro encontrado!
        </div>';
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <?php include_once("includes/head.php"); ?>
  </head>
  <body>

    <?php include_once("includes/nav.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <h1>Listagem Vendedores</h1>

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>                    

                <?php foreach($lista as $seller): ?>
                    <tbody>
                        <tr>
                        <th scope="row"><?=$seller["id"]; ?></th>
                        <td><?=$seller["seller_name"]; ?></td>
                        <td><?=$seller["seller_email"]; ?></td>
                        <td>
                            <a href="editar.php?id=<?= $seller["id"]?>" class='btn btn-primary'>Editar</a>
                            <a href="ver_vendas.php?id=<?= $seller["id"]?>" class='btn btn-success'>Ver Vendas</a>
                            <a href="excluir.php?id=<?= $seller["id"]?>" class='btn btn-danger'>Excluir</a>
                        </td>
                        </tr>
                    </tbody>
                <?php endforeach;?>

                </table>
                <div class="mb-3">
                <a href="cadastrar.php" class='btn btn-primary'>Cadastrar Vendedores</a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once("includes/footer.php"); ?>
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>