<?php
    // Arquivo referente a configuração do sistema
    define("SITE_NOME", "Site Aula 01");
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("BASE", "cadastro");
    
    $conn = new MySQLi(HOST,USER,PASS,BASE);
?>
