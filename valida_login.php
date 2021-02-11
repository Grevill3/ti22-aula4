<?php
    //varáveis superglobais
    //método "post" -> variável sperglobal $_POST[]
    //$_POST['senha','123']

    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];

    
    $sql = "SELECT * FROM tbl_usuarios WHERE usuario='$usuario'";

    include_once "conexao.php";

    //executando
    $resultado = mysqli_query($conn, $sql);

    //verificando se encontrou o usuario cadastrado na base de dados
    if ($campo=mysqli_fetch_array($resultado))
    {
        if (password_verify($senha, $campo['senha'])) {
  
            //armazenar o nome do usuário numa variável de sessão
            //inicializar a sessão
            // $_SESSION nome da sessão
            session_start();
            // vamos armazenar o conteúdo que está na variável $campo na variável de sessão
            $_SESSION['nome']= $campo['nome']; 
    
           ?>
            <script>  
              window.location.href="principal.php";
            </script>
    <?php
    
          } 
          else 
          {
    
        ?>
            <script>  
              alert ("Senha não confere!");
              window.location.href="index.php";
            </script>
    
              <?php
    
            }
        }
        else {
          ?>
          <script>  
          alert ("Usuário não cadastrado!");
          window.location.href="index.php";
        </script>
        <?php
        }
        ?>