<?php
    //varáveis superglobais
    //método "post" -> variável sperglobal $_POST[]
    //$_POST['senha','123']

    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];
    
    echo "Usuário: ".$usuario;
    echo "<br>";
    echo "Senha: ".$senha;



?>