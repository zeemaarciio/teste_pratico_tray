<?php require 'app/config.php'; 
require 'models/sellers.php';

$vendedores = buscar_vendedores();
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
            <h1>Cadastrar Venda</h1>

            <form action="venda_action.php" method="POST">
                <div class="mb-3">
                    <label>Vendedor</label>
                    <select class="form-select" aria-label="Default select example" name="seller_id">
                      <?php 
                        if(count($vendedores) > 0) {
                          ?>
                          <option selected>Selecione um vendedor</option>
                          <?php foreach($vendedores as $vendedor) {
                          ?>
                            <option value="<?= $vendedor['id'] ?>"><?= $vendedor['seller_name'] ?></option> <?php
                          }
                        } else {
                          ?>
                            <option value="">Nenhum vendedor encontrado!</option>
                          <?php
                        }
                      ?>
                      
                    </select>
                </div>

                <div class="mb-3">
                    <label for="sales_price">Valor da Venda</label>
                    <input type="text" name="sales_price" class="form-control">
                </div>

                <div class="mb-3">
                    <button type="submit" value="Salvar" class="btn btn-primary">Cadastrar Venda</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <?php include_once("includes/footer.php"); ?>
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>