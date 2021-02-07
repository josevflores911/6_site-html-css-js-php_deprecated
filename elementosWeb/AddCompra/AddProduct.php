<!DOCTYPE html>
<html>
<head>
	<title>adicionar producto</title>


			<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


		<link rel="stylesheet" type="text/css" href="style.css">
		
			
</head>
<body onload="init()">

	adicionar y mostrar en lista de confirmacion los que se va a comrprar
<form>
	<div id="saleBox" align="center">
		<div id="imageBox">
			<b>titulo_Producto
			<!--<div style="width:250px;height: 250px;background-color: #e6e6e6;"></div>-->
			<div id="group" style="display: flex; margin-left: 25px;">
				
				<div class="myBtn R"></div>
				
				<!--un php que haga un for con la descarga de las imagenes-->
				<img src="imgen/a1.PNG" class="smallImage">
				<img src="imgen/a2.PNG" class="smallImage">
				<img src="imgen/a3.PNG" class="smallImage">

				<div class="myBtn L"></div>

			</div>
			
			<div id="show" style="width:250px;height: 250px; border-radius: 5px"></div>
			<button type="button" class="btn btn-primary" value="Cadastrar" onclick="escrever(form.Area)" style="width:250px;height: 27px;">agregar</button>
							
		</div>

		<div id="navBar">
			<button id="left" type="button" class="btn btn-secondary">-</button>
			<div id="result">cantidad</div>
			<button id="right" type="button" class="btn btn-secondary">+</button>
		</div>	
	</div>


		<div align=center style="position: absolute; left: 50%; top: 10%;">
			<h2>Cadastro</h2>
			<p><textarea rows=10 cols=40 name=Area></textarea>
		</div>
	</form>



<p>Esto puede ser optimizado con react</p>

<p>no funcionan los botones de adicionar cantidad ni los cambios de imagenes</p>
<div id="saleBox" align="center">
		<div id="imageBox">
			<b>titulo_Producto
			<!--<div style="width:250px;height: 250px;background-color: #e6e6e6;"></div>-->
			<div class="group">
				<img src="imgen/c1.PNG" class="smallImage">
				<img src="imgen/c2.PNG" class="smallImage">
			</div>
			<div id="show" style="width:250px;height: 250px; border-radius: 5px"></div>
							
		</div>

		<div id="navBar">
			<button id="left" type="button" class="btn btn-secondary">-</button>
			<div id="result">cantidad</div>
			<button id="right" type="button" class="btn btn-secondary">+</button>
		</div>	
	</div>	
		
<p>se puede agregar un slider para mostrar grupos de 4 camisas</p>	
<div id="saleBox" align="center">
		<div id="imageBox">
			<b>titulo_Producto
			<!--<div style="width:250px;height: 250px;background-color: #e6e6e6;"></div>-->
			<div class="group">
				<img src="imgen/b1.PNG" class="smallImage">
				<img src="imgen/b2.PNG" class="smallImage">
				<img src="imgen/b3.PNG" class="smallImage">
				<img src="imgen/b4.PNG" class="smallImage">
			</div>
			<div id="show" style="width:250px;height: 250px; border-radius: 5px"></div>
							
		</div>

		<div id="navBar">
			<button id="left" type="button" class="btn btn-secondary">-</button>
			<div id="result">cantidad</div>
			<button id="right" type="button" class="btn btn-secondary">+</button>
		</div>	
</div>	


</body>

		<!-- My Script -->
		<script type="text/javascript" src="dinamic.js"></script>
		
		<!-- JQuery -->		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>