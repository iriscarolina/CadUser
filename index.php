<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title>Cadastro de usuário</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/formulario.css">
	</head>
	<body>
		<main class="container">
			<h2>Cadastre-se!</h2>
			<form method="post" action="cadastrar.php">
				<div>
					<label>Nome</label>
					<input type="text" name="nome" id="nome" placeholder="Nome" required/>
				</div></br>
				<div>
					<label for="">e-mail</label>
					<input type="email" name="email" id="email" placeholder="usuario@mail.com" required/>
				</div></br>
				<div>
					<label>senha</label>
					<input type="password" name="senha" id="senha" placeholder="senha" required/>
				</div></br>
				<div id="botao">
					<input type="submit" class="btn_enviar" name="cadastrar" value="Cadastrar">
				</div>
			</form>
		</main>
	</body>
</html>
