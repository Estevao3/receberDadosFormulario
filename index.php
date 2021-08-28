<?php
if(isset($_POST['email']) && !empty($_POST['email'])){
	if(isset($_POST['senha']) && !empty($_POST['senha'])){
		
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		echo "Meu email eh: {$email}";
		echo " Minha senha eh: ".$senha;
	}
}
?>

<form method="POST">
	E-mail:<br>
	<input type="email" name="email"><br><br>

	Senha:<br>
	<input type="password" name="senha"><br><br>

	<input type="submit" value ="Enviar Dados">
</form>