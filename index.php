<?php
    session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="utf-8">        
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>   
        <script src="js/jquery.md5.js"></script>
        
    </head>
    
    <body>
         
        <form method="POST" action="php/GravarDados.php">
        
        Nome: <input type="text" placeholder="Nome" name="nome"  required autofocus/> <br>
        Sobrenome: <input type="text" placeholder="Sobrenome" name="sobrenome" required /> <br>
        Senha: <input type="password" placeholder="Senha" name="senha" required /> <br>
        E-mail:<input type="text" name="email" placeholder="E-mail"  required/> <br>
        Animes preferidos: <br> <textarea name="anime" required></textarea> <br>
        <button type="submit"> Entrar </button>
    
        </form> 
        
        <p>
            <?php            
            if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>

</html>
<!-- -- > finalizar a parte do erro e do botão