<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Meu CSS -->
    <link rel="stylesheet" href="assets/css/estilo.css">

    <link rel="icon" href="assets/imagem/cadastro.webp">
</head>
<body>
    <main class="container">
    <header>
        <h2>Senac</h2>      
    </header>

    <img id="cadastro" src="assets/imagem/cadastro.webp" alt="ícone de formulário de cadastro">
    <br>

    <section>
     <!-- formulário -->
     <div class="row">  
              <!-- primeira coluna -->
              <div class="col-3"></div>      
              <!-- segunda coluna  -->
              <div class="col-6">
                <!-- método padrão: get -->
                <form method="post" action="atualiza_usuario.php">
                <div class="form-col align-items-center">

                  <!-- usuário -->
                  <div class="col-auto mb-4">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                      </svg>  
                      </div>
                        <input type="text" class="form-control" placeholder="Usuário" name="usuario" maxlength="10" required autofocus>
                    </div>
                  </div>
                  <!-- fim do usuário -->

                  <!-- NOME do usuario -->
                  <div class="col-auto mb-4">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                      
                      </div>
                        <input type="text" class="form-control" placeholder="Nome de usuário" name="nomeusuario" maxlength="10" required>
                    </div>
                  </div>
                  <!-- fim do NOME do usuario -->

                  <!-- Email -->
                  <div class="col-auto mb-4">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                    </svg> 
                      </div>
                        <input type="text" class="form-control" placeholder="E-mail" name="email" required>
                    </div>
                  </div>
                  <!-- Fim email -->

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
                      name="senha" id="senha" minlength="4" maxlength="8" required>
                    </div>
                  </div>
                  <!-- fim senha -->
                    
                  <!-- confirmar senha -->
                  <div class="col-auto mb-4">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                      </svg>                     
                      </div>
                        <input type="password" class="form-control" placeholder="Confirme a senha" name="confirmesenha" id="confirmarsenha" maxlength="10" required>
                    </div>
                  </div>
                  <!-- fim confirma senha -->
                  
                  <div class="col-auto">
                    <button type="submit" id="enviar" class="btn btn-primary mb-2" title="Envia informações para o servidor">Enviar</button>

                    <button type="reset" class="btn btn-danger mb-2" title="Remove informações digitadas">Apagar</button>

                    <input type="button" class="btn btn-warning mb-2" title="Volta para a página inicial" value="Voltar" onClick="history.go(-1)">
                  </div>
                  
                </div>
              </form>
            </div>
            </div>
    </section>

    <footer>
        <div class="row">

          <div class="col-4">
            <p id="lapa">
            Lapa Tito
            </p>
         </div>

          <div class="col-4">
            <p id="ti">
            &copy;TI22
            </p>
          </div>

          <div class="col-4">
            <p id="data">
            <?php echo date("d/m/y"); ?>
            </p>
          </div>

        </div>
        </footer>

    </main>

    <!-- Meu JS -->
    <script src="assets/js/script.js"></script>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>