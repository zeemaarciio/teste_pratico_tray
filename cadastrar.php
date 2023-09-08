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
            <h1>Cadastro de Vendedor</h1>

            <form action="cadastrar_action.php" method="POST">
                <div class="mb-3">
                    <label for="seller_name">Nome</label>
                    <input type="text" name="seller_name" class="form-control" require>
                </div>

                <div class="mb-3">
                    <label for="seller_email">Email</label>
                    <input type="email" name="seller_email" class="form-control" require>
                </div>

                <div class="mb-3">
                    <button type="submit" value="Salvar" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <?php include_once("includes/footer.php"); ?>

    <script src="assets/js/bootstrap/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>