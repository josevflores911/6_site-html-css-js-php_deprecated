
<!DOCTYPE html>
<html>
<head>
	<title>footer con leaflet</title>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>

	<!--google fonts-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet"> 


	<!--fontAwesome-->	
	<link href="fontawesome/css/all.css" rel="stylesheet">
	<script defer src="fontawesome/js/all.js"></script>


	<!--leaflet-->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
	integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
	crossorigin=""/>

	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
	integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
	crossorigin=""></script>

</head>
<body>

	<div id="map" style="height: 600px;"></div>

	<script>
		const tilesProvider = 'https://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_all/{z}/{x}/{y}.png'

		let map = L.map('map').setView([51.505,-0.09], 13)

		L.tileLayer(tilesProvider, {
			maxZoom:18,
		}).addTo(map)

		let marker = L.marker([51.505,-0.09]).addTo(map)

		

		let iconMarker = L.icon({
			iconUrl:'marker.png',
			iconSize: [60, 60],
			iconAnchor: [30,60]
		})

		let marker2 = L.marker([51.51, -0.09],{ icon: iconMarker }).addTo(map)


		map.on('dblclick', e =>{
			let latLng = map.mouseEventToLatLng(e.originalEvent)
			console.log(latLng)
		})


		
	</script>

	no esta ajustado para redimensionarse
	y falta media para aplicativos

	fontawesome:https://fontawesome.com/how-to-use/on-the-web/setup/hosting-font-awesome-yourself

	leaflet: https://www.youtube.com/watch?v=KVjdId6NelA
	1)https://leafletjs.com/download.html
	2) https://wiki.openstreetmap.org/wiki/Tiles

	<div class="footer">
		<div class="footer-content">
			<div class="footer-section about">
				<h1 class="logo-text"><span>Awa</span>Inspires</h1>
				<p>
					Con su acuerdo, nosotros y nuestros socios usamos cookies o tecnologías 
					similares, propias y de terceros, para almacenar, acceder y procesar 
					
				</p>
				<div class="contact">
					<span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
					<span><i class="fas fa-envelope"></i> &nbsp; info@awainspires.com</span>

				</div>
				<div class="socials">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-youtube"></i></a>
				</div>
			</div>
			<div class="footer-section links">
				<h2>Quick Links</h2>
				<br>
				<ul>
					<a href="#"><li>Events</li></a>
					<a href="#"><li>Team</li></a>
					<a href="#"><li>Mentores</li></a>
					<a href="#"><li>Gallery</li></a>
					<a href="#"><li>Terms and Conditions</li></a>
					
				</ul>
			</div>
			<div class="footer-section contact-form">
				<h2>Contact Us</h2>
				<br>
				<form action="index.html" method="post">
					<input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
					<textarea name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
					<button type="submit" class="btn btn-big">
						<i class="fas fa-envelope"></i>
						Send
					</button>
				</form>
			</div>
		</div>
		<div class="footer-bottom">
			&copy; condingpoets.com | Designed by Awa Melvine
		</div>		
	</div>
</body>
</html>
