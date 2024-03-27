<?php 
include ('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0){
        echo "preencha sua senha";
    } else {
        $email = $mysqli-> real_escape_string($_POST['email']);
        $senha = $mysqli-> real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE email = '$emai' AND senha ='$senha'";
        $sql_query = $mysqli->query($sql_code) or die ("falha na execução do código" . $mysqli->error);
        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query-> fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['sobrenome'] = $usuario['sobrenome'];
            
        }else{
            echo "fahar ao logar! e-mail ou senha incorretos";
        }

    }
}
?>