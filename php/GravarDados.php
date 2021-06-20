<?php
	
	session_start();    
	$conexao = mysqli_connect("localhost", "root", "", "bancobcc");
	
	if((isset($_POST['nome'])) && (isset($_POST['senha']))){
        $nome = mysqli_real_escape_string($conexao, $_POST['nome']); 
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
        $senha = md5($senha);      	
		$result_usuario = "SELECT * FROM usuario WHERE nome = '$nome' && senha = '$senha' LIMIT 1";
		$result = mysqli_query($conexao, $result_usuario);
		$resultado = mysqli_fetch_assoc($result);
        if(empty($resultado)){
			$_SESSION['loginErro'] = "Nome ou senha inválido";
			header("Location: ../paginas/formulario.php");
		}
		elseif(isset($resultado)) {
			header("Location: ../paginas/sobre.html");
		}
		else{
			$_SESSION['loginErro'] = "Nome ou senha inválido";
			header("Location: ../paginas/formulario.php");
		}       
	}
    else{
    $_SESSION['loginErro'] = "Nome ou senha inválido";
    header("Location: ../paginas/formulario.php");}

?>