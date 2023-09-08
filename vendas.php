<?php require 'app/config.php';

require 'models/sales.php';

$lista = buscar_vendas();

/*$sql = $pdo->query("SELECT * FROM sales ORDER BY sales_id");

if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo "Nenhum registro encontrado!";
}*/

/*$sql = 'SELECT * FROM sellers ORDER BY seller_name';
foreach ($pdo->query($sql) as $row) {
    print $row['seller_name'] . "\t";
    print $row['seller_email'] . "\t";
}
*/
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
                <h1>Listagem Vendas</h1>

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Preço da venda</th>
                        <th scope="col">Comissão</th>
                        <th scope="col">Vendedor</th>
                        <!-- <th scope="col">Ações</th> -->
                        </tr>
                    </thead>                    

                <?php foreach($lista as $sale): ?>
                    <tbody>
                        <tr>
                        <th scope="row"><?=$sale["sales_id"]; ?></th>
                        <th scope="row">R$ <?=number_format($sale["sales_price"], 2, ',', ' '); ?></th>
                        <th scope="row">R$ <?=number_format($sale["sales_commission"], 2, ',', ' '); ?></th>
                        <th scope="row"><?=$sale["seller_id"]; ?></th>
                        <td>
                            <!-- <a href="" class='btn btn-warning'>Editar</a>
                            <a href="" class='btn btn-danger'>Excluir</a> -->
                        </td>
                        </tr>
                    </tbody>
                <?php endforeach;?>

                </table>
                <div class="mb-3">
                <a href="cadastrar_venda.php" class='btn btn-primary'>Cadastrar Venda</a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once("includes/footer.php"); ?>
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>