<?php
require 'app/config.php';
require 'models/sales.php';

$seller_id = filter_input(INPUT_POST, 'seller_id');
$sales_price = filter_input(INPUT_POST, 'sales_price');

if($seller_id > 0 && is_numeric($sales_price)) {
    $sql = $pdo->prepare("SELECT * FROM sellers WHERE id = :id");
    $sql->bindValue(':id', $seller_id);
    $sql->execute();

    if($sql->rowCount() > 0) {
        $sales_commission = $sales_price * 0.085;
        cadastrar_venda($seller_id, $sales_price, $sales_commission);
    
        header("Location: vendas.php");
        exit;
    } else {
        header("Location: cadastrar_venda.php");
    }


} else {
    header("Location: cadastrar_venda.php");
    exit;
}

?>