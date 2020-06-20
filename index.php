<HTML>

	<header>
		<link rel = "stylesheet" type = "text/css" href = "index.css"/>
	</header>

	<body>


		<div id = "menu">
			<a class = "menuBotao" href = "login.php">Login</a>
		</div>

		<div id = "content">
			<center>

				<h1>Faça seu cadastro</h1>
				<form method="GET" action="process.php">
					<input type = "text" class = "inputCadastro" placeholder = "Nome completo" name="nome"/>
					<br>
					<input type = "password" class = "inputCadastro" placeholder = "Senha" name="senha"/>
					<br>
					<input type = "text" class = "inputCadastro" placeholder = "Email" name="email"/>
					<br>
					<button type = "submit" class = "menuBotao">Cadastrar</button>
				</form>
			</center>
		</div>


	</body>


</HTML>