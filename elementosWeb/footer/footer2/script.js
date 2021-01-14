/*const tilesProvider = 'https://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_all/{z}/{x}/{y}.png'

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
*/