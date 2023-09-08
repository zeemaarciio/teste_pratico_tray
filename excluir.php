<?php
require 'app/config.php';
require 'models/sellers.php';

$id = filter_input(INPUT_GET, 'id');
excluir_vendedor($id);
header("Location: index.php");

?>