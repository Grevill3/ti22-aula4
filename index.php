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
            <img src="assets/imagem/login2.webp" alt="">
        </section>

        <section>
            <!-- Formulario -->
            <form>
                <div class="form-row align-items-center" id="name">
                  <div class="col-auto">
                    <label class="sr-only" for="inlineFormInput">Name</label>
                    <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                  </div>

                  <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                      <label class="form-check-label" for="autoSizingCheck">
                        Remember me
                      </label>
                    </div>
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  </div>
                </div>
              </form>
              </section>

        <footer>
        <div class="row">

          <div class="col-4">
            <p>
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


    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>