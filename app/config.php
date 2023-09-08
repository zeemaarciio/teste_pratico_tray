<?php

    define('BASE', 'ecommerce');
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');

    /*define('BASE', 'u530538035_projetotray');
    define('HOST', 'localhost');
    define('USER', 'u530538035_projetotray');
    define('PASS', '#ProjetoTray123');*/

    //$conexao = new MySQLi(HOST,USER,PASS,BASE);

    //$pdo = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');
    $pdo = new PDO("mysql:host=".HOST.";dbname=".BASE.";charset=utf8", "".USER."", "".PASS."");
    $globals = $GLOBALS;
    $globals['pdo'] = $pdo;

?>