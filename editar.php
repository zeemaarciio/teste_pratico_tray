<?php
require 'app/config.php';

$vendedor = [];
$id = filter_input(INPUT_GET, 'id');

if($id) {
    $sql = $pdo->prepare("SELECT * FROM sellers WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0) {
        $vendedor = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
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
            <h1>Editar Vendedor</h1>

            <form action="editar_action.php" method="POST">
                <input type="hidden" name="id" value="<?= $vendedor["id"]; ?>">
                <div class="mb-3">
                    <label for="seller_name">Nome</label>
                    <input type="text" name="seller_name" class="form-control" value="<?= $vendedor["seller_name"]; ?>">
                </div>

                <div class="mb-3">
                    <label for="seller_email">Email</label>
                    <input type="email" name="seller_email" class="form-control" value="<?= $vendedor["seller_email"]; ?>">
                </div>

                <div class="mb-3">
                    <button type="submit" value="Atualizar" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <?php include_once("includes/footer.php"); ?>
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>