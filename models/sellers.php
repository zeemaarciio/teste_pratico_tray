<?php 
//require 'app/config.php'; arquivo já incluso no começo da tela
function buscar_vendedores() {

    $lista = [];

    $sql = $GLOBALS['pdo']->query("SELECT * FROM sellers ORDER BY seller_name DESC");

    if($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    return $lista;
}

function cadastrar_vendedor($seller_name, $seller_email) {
    $sql = $GLOBALS['pdo']->prepare("INSERT INTO sellers (seller_name, seller_email, created_at) VALUES (:nome, :email, now())");
    $sql->bindValue(':nome', $seller_name);
    $sql->bindValue(':email', $seller_email);
    return $sql->execute();
}

function editar_vendedor($id, $nome, $email) {
    $sql = $GLOBALS['pdo']->prepare("UPDATE sellers SET seller_name = :nome, seller_email = :email WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id,);
    return $sql->execute();
}

function excluir_vendedor($id) {
    if($id) {
        $sql = $GLOBALS['pdo']->prepare("DELETE FROM sellers WHERE id = {$id}");
        //$sql->bindValue(':id', $id);
        return $sql->execute();
    }
}

?>
