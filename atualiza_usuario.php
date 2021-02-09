<?php
//Movimentar os conteudos do formulário para as variáveis de memoria - lembrar que método POST utiliza a váriavel superglobal $_POST[]
$nomeusuario = $_POST['nomeusuario'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
//função trim - retira espaços antes e depois
$hashsenha = trim(password_hash($senha, PASSWORD_DEFAULT));

//montar a string $sql com os comandos necessários para a inserção de um registro no banco de dados
$sql = "INSERT INTO tbl_usuarios (nome, usuario, email, senha) VALUES ('$nomeusuario', '$usuario', '$email', '$hashsenha')";

//incluir a rotina de conexão com o banco de dados
include "conexao.php";

//executando o comando sql no banco de dados
mysqli_query($conn, $sql);

//fechando a instancia da conexão
mysqli_close($conn);
?>
<!-- retornando para o index.php com o JS -->
<script>
    alert ('usuario inserido com sucesso');
    window.location.href='index.php';
</script>