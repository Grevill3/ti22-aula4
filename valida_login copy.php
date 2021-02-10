<?php
    //varáveis superglobais
    //método "post" -> variável sperglobal $_POST[]
    //$_POST['senha','123']

    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];

    $hashsenha = trim(password_hash($senha, PASSWORD_DEFAULT));
    
    $sql = "SELECT senha FROM tbl_usuarios WHERE usuario='$usuario'";

    include_once "conexao.php";

    //executando
    $resultado = mysqli_query($conn, $sql);

    //verificando se encontrou o usuario cadastrado na base de dados
    if ($campo=mysqli_fetch_array($resultado))
    {
        //encontrou um usuario cadastrado
        //caso tenha encontrado vamos comparar as senhas
        if ($campo['senha']==password_verify($senha, $hashsenha)){
            //a senha está correta
            //usuário está com autorização para entrar
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
            alert("A senha não confere com a cadastrada");
            window.location.href="index.php";
            </script>
            <?php

        }
    }
    else{
        ?>
        <script>
        alert("Usuário não cadastrado");
        </script>
    <?php
    }
    ?>
    


?>