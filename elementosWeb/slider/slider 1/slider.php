<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">

	<title>Image Sliderl</title>

	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="slider">
		<div class="slides">
			
			<input type="radio" name="radio-btn" id="radio1">
			<input type="radio" name="radio-btn" id="radio2">
			<input type="radio" name="radio-btn" id="radio3">
			<input type="radio" name="radio-btn" id="radio4">

			<div class="slide first">
				<img src="1.jpg" alt="">
			</div>

			<div class="slide">
				<img src="2.jpg" alt="">
			</div>

			<div class="slide">
				<img src="3.jpg" alt="">
			</div>

			<div class="slide">
				<img src="4.jpg" alt="">
			</div>

			<div class="navigation-auto">
				<div class="auto-btn1"></div>
				<div class="auto-btn2"></div>
				<div class="auto-btn3"></div>
				<div class="auto-btn4"></div>
			</div>

		</div>

		<div class="navigation-manual">
			<label for="radio1" class="manual-btn"></label>
			<label for="radio2" class="manual-btn"></label>
			<label for="radio3" class="manual-btn"></label>
			<label for="radio4" class="manual-btn"></label>
		</div>

	</div>


	
</body>
</html>