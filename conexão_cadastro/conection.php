<?php
$dbHost = ' localhost'; // 'localhost' em letras minúsculas
$dbUsername = 'admin_1';
$dbPassword = '1234';
$dbName = 'cliente';

// Verifique a conexão com o banco de dados
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verifique se ocorreu algum erro na conexão
//if ($conexao->connect_errno) {
  //  echo "Erro: " . $conexao->connect_error;
//} else {
//    echo "Conexão efetuada";
//}

// Não se esqueça de fechar a conexão quando terminar de usá-la
//$conexao->close();
?>
