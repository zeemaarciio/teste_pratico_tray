<?php 
//require 'app/config.php'; arquivo já incluso no começo da tela
function buscar_vendas() {

    $lista = [];

    $sql = $GLOBALS['pdo']->query("SELECT * FROM sales ORDER BY sales_id");

    if($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    return $lista;
}

function cadastrar_venda($seller_id, $sales_price, $sales_commission) {
    $sql = $GLOBALS['pdo']->prepare("INSERT INTO sales (seller_id, sales_price, sales_commission, created_at) VALUES (:seller_id, :sales_price, :sales_commission, now())");
    $sql->bindValue(':seller_id', $seller_id);
    $sql->bindValue(':sales_price', $sales_price);
    $sql->bindValue(':sales_commission', $sales_commission);
    return $sql->execute();
}

function buscar_vendas_por_vendedor($id) {

    $lista = [];

    $sql = $GLOBALS['pdo']->query("SELECT * FROM sales WHERE seller_id = {$id}");

    if($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    return $lista;
}

function buscar_nome_email_por_vendedor($id) {
    $lista = [];
    $sql = $GLOBALS['pdo']->query("SELECT seller_name, seller_email 
                                    FROM sellers 
                                    INNER JOIN sales
                                    ON sellers.id = sales.seller_id WHERE seller_id = {$id}");
    if($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    return $lista;

}

?>
