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
             <!-- formulário -->
             <div class="row">  
              <!-- primeira coluna -->
              <div class="col-3"></div>      
              <!-- segunda coluna  -->
              <div class="col-6">
                <!-- método padrão: get -->
                <form method="post" action="valida_login.php">
                <div class="form-col align-items-center">
                  <!-- usuário -->
                  <div class="col-auto mb-4">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                      </svg>  
                      </div>
                        <input type="text" class="form-control" placeholder="Usuárioo" name="usuario" maxlength="10">
                    </div>
                  </div>
                  <!-- fim do usuário -->

                  <!-- senha -->
                  <div class="col-auto">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                         <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg></div>
                      </div>
                      <input type="password" class="form-control" placeholder="Senha"
                      name="senha" minlength="4" maxlength="8">
                    </div>
                  </div>
                  <!-- fim senha -->
                  
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2" title="Envia informações para o servidor">Logar</button>

                    <a href="cadastrese.php" class="btn btn-success mb-2">Cadastre-se</a>
                    <a href="" class="btn btn-dark mb-2">Esqueci a senha</a>
                    <button type="reset" class="btn btn-danger mb-2" title="Remove informações digitadas">Apagar</button>
                  
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