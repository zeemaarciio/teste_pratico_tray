<?php
require 'app/config.php';
require 'models/sellers.php';

$nome = filter_input(INPUT_POST, 'seller_name');
$email = filter_input(INPUT_POST, 'seller_email');

if($nome && $email) {

    $sql = $pdo->prepare("SELECT * FROM sellers WHERE seller_email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0) {
        cadastrar_vendedor($nome, $email);
    
        header("Location: index.php");
        exit;
    } else {
        header("Location: cadastrar.php");
    }


} else {
    header("Location: cadastrar.php");
    exit;
}

?>