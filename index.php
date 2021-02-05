<!-- Código para definir a região da data utilizada -->
<?php date_default_timezone_set('america/sao_paulo');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Meu CSS -->
    <link rel="stylesheet" href="assets/css/estilo.css">

    <link rel="icon" href="assets/imagem/login.webp">
</head>
<body>
    <main class="container">
        <header>
            <h2>Senac</h2>
        </header>
        <section id="imagem">
            <img src="assets/imagem/login.webp" alt="">
        </section>

        <section>
            <!-- Formulario -->
          <div class="row">
            <!-- primeira coluna -->
            <div class="col-3"></div>
            <!-- segunda coluna -->
            <div class="col-6">
            <form method="post" action="valida_login.php">
                <div class="form-col align-items-center">
                    <div class="col-auto">
                        <input type="text" class="form-control mb-3"  placeholder="Usuário" name="usuario"
                        maxlength="10">
                    </div>

                    <div class="col-auto">
                        <div class="input-group mb-3">
                          <input type="password" class="form-control" placeholder="Senha" name="senha" minlength="4" maxlength="8">
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-primary ml-3" title="Entrar">Logar</button>

                        <a href="" class="btn btn-success ml-2">Cadastre-se</a>
                        <a href="" class="btn btn-dark ml-2">Esqueci a senha</a>
                        <button type="reset" class="btn btn-danger ml-2" title="Remove as informações digitadas">Apagar</button>
                    </div>
                </div>
            </form>
            </div>
          </div>
              </section>
      <?php
      include "footer.php";
      ?>
        
    </main>


    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>