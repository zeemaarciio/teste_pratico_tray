<?php
require 'app/config.php';
require 'models/sellers.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'seller_name');
$email = filter_input(INPUT_POST, 'seller_email', FILTER_VALIDATE_EMAIL);

if($id && $nome && $email) {
    /*$sql = $pdo->prepare("UPDATE sellers SET seller_name = :nome, seller_email = :email WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();*/
    editar_vendedor($id, $nome, $email);
    header("Location: index.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>