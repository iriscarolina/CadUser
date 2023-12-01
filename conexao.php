<?php



//Variáveis que recebem informações da base de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "dbcaduser";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//Teste de conexão, caso apresente problema, encerra a conexão
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
//Exibe mensagem de êxito para conexão bem sucedida
echo "<script>alert('Conexão bem sucedida')</script>";

?>