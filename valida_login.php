<?php
    //varáveis superglobais
    //método "post" -> variável sperglobal $_POST[]
    //$_POST['senha','123']

    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];

    $hashsenha = trim(password_hash($senha, PASSWORD_DEFAULT));
    
    $sql = "SELECT * FROM tbl_usuarios WHERE usuario='$usuario' AND senha='$senha'";

    include_once "conexao.php";

    //executando
    $resultado = mysqli_query($conn, $sql);

    //verificando se encontrou o usuario cadastrado na base de dados
    if ($campo=mysqli_fetch_array($resultado))
    {
        //armazenar o nome do usuario numa variável de sessão
        // $_SESSION; nome da sessão
        session_start();
        //vamos armazenar o conteudo que esta na variavel $campo na var sessão
        $_SESSION['nome']= $campo['nome'];

            ?>
            <script>
            alert("Usuário logado");
            window.location.href="principal.php";
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Usuário não cadastrado");
                window.location.href="index.php";
            </script>
            <?php

        }
    
    // else{
    //     ?>
            <script>
    //          alert("Usuário não cadastrado");
    //      </script>
    <?php
    
    ?>
    


?>