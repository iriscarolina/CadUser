<?php
include('conexao.php');
/*Variaveis para armazenamento de dados de form */
$nome = $_POST['nome'];
$nome = $_POST['email'];
$nome = $_POST['senha'];

/*confirma dados informados pelo usuario */
echo "<h3>Nome: $nome</h3>";
echo "<h3>email: $email</h3>";
echo "<h3>senha: A senha é secreta</h3>";

// String de inserção no banco
$cad_usuario = "INSERT INTO usuario(nome,email,senha) VALUES ('$nome','$email','$senha')";

// Teste de condição para rodar SQL
if(mysqli_query($conn, $cad_usuario)){
    echo "<h1>Novo cadastro realizado</h1>"
}else{
    echo "Erro: " . $cad_usuario . "</br>" . mysqli_error($conn);
}
// msqli_close($conn);

?>