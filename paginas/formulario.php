<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href=".../css/estilo.css">
    <link rel="shortcut icon" href=".../img/amougs.ico" type="image/x-icon">
    <script src=".../js/funcoes.js"></script>
    <title>SUS</title>
</head>

    <body class="d-flex h-100 text-center text-white bg-dark">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
          <header class="mb-auto" id="header-padding">
            <div>
              <h3 class="float-md-start mb-0">SUS - Formulário</h3>
            </div>
          </header>
          <main>
            <div class="container">
            <form method="POST" action="../php/GravarDados.php">
              <h4>Nome: <h4> <input type="text" placeholder="Nome" name="nome"  required autofocus/> <br>
              <h4>Sobrenome: </h4> <input type="text" placeholder="Sobrenome" name="sobrenome" required /> <br>
              <h4>Senha: </h4><input type="password" placeholder="Senha" name="senha" required /> <br>
              <h4>E-mail:</h4><input type="text" placeholder="E-mail" name="email" required/> <br>
              <h4>Animes preferidos:</h4><textarea name="anime" required></textarea>  <br>
              <button type="submit"> Acessar </button>
            </form>
            <p>
              <?php            
              if(isset($_SESSION['loginErro'])){
                  echo $_SESSION['loginErro'];
                  unset($_SESSION['loginErro']);
            }?>
        </p>
            </div>
          </main>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        </div>
        </body>

</html>