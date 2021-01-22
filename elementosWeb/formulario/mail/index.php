<!DOCTYPE html>
<html>
<head>
	<title>Mail to</title>

	<link rel="stylesheet" type="text/css" href="">

</head>
<body>

	<div>
		<form action="https://api.staticforms.xyz/submit" method="POST" class="card">
			<input type="hidden" name="accessKey" value="3f6e5ba4-e1ab-4ff9-8a7f-6d8b503f61b0">

			<label for="inputNome">Primeiro Nome:</label>
			<input type="text" id="inputNome" name="name" required maxlength="25" minlength="2">
			<span></span>

			<label for="inputEmail">Endereço de Email:</label>
			<input type="email" id="inputEmail" name="email" required maxlength="50">
			<span></span>

			<label for="textAreaMensagem">Mensagem:</label>
			<textarea name="message"  id="textAreaMensagem" required maxlength="100"></textarea>
			<span></span>			

			<button>Enviar mensagem</button>
		</form>
	</div>

	<footer>
		<dl>
			<dt>E-mail</dt>
			<dd>email@mail.com</dd>
			<br/>
			<dt>Telefone</dt>
			<dd>(46)9 9999-9999</dd>
		</dl>
	</footer>

	<h1>with PHP</h1>

	<form action="send.php" method="POST">
		TO(email):<input type="text" name="to"><br>
		From(email):<input type="text" name="from"><br>
		Subject:<input type="text" name="subject"><p>
		Message:<br><textarea name="message"></textarea><p>
		<input type="submit" name="submit" value="send!">	
	</form>

</body>
</html>