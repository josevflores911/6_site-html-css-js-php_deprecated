/*se declarann las variables globales*/
var imgs = [];
var imgAtual;
let imagens = document.querySelectorAll('.smallImage');//global scope
var show = document.getElementById("show");//block scope

var left = document.querySelectorAll("#left");
var right = document.querySelectorAll("#right");
var result = document.querySelectorAll("#result");

var add = [];

var auxiliar;//borrar

//carga todas las imagenes pequeñas 
for(let i=0; i<imagens.length; i++){
	imagens[i].addEventListener('click',function(){
		preCarregamento();
		imgAtual = i; //ojo con este
		carregarImg(imgAtual);
	});
}

//precarregamento de las imagenes solo de las que comienzan con a
function preCarregamento() {
	var a = 1;
	for(var i = 0; i < 3; i++){
		imgs[i] = new Image();
		imgs[i].src = "imgen/a" + a + ".png";
		a++;
	}	
}

//hace el display de la imagen en el cuadro(aqui puedo hacer el toogle o el visible true DOM)
function carregarImg(img){
	show.style.backgroundImage = "url('"+imgs[img].src+"')";
}

//funcion que se carga al iniciar la pagina que permite
function init(){
	
	//multiple images
	for(let i=0; i<left.length; i++){
		add[i] = 0;
		left[i].addEventListener('click',function(){
			if(add[i]!=0){
				add[i]=add[i]-1;
				result[i].textContent = add[i];
				auxiliar=add[i];
			}
		});
		
		right[i].addEventListener('click',function(){
			add[i]=add[i]+1;
			result[i].textContent = add[i];
			auxiliar=add[i];
		});

	}
}

//boton agregar adiciona contenido en el cuadro de texto
function escrever(quadro) {
	if(imgAtual==0){
		imgAtual="copa";
	}else if(imgAtual==1){
		imgAtual="embudo";
	}else if(imgAtual==2){
		imgAtual="barril";
	}else{
		imgAtual="...";
	}
	var info="";
	info +="**************  encabezado  *************\n";
	info += "sobrero tipo: " + imgAtual+"\n";
	info += ""+ auxiliar +" sobreros "+"\n";
	info +="\n";
	info += "por un valor de: "+ (auxiliar*100) + "r$\n";
	info +="**************  pie de pagina  *************\n";
	console.log(info);
	quadro.value = info;
}





















/*var left = document.getElementById("left");
var right = document.getElementById("right");
var result = document.getElementById("result");*/

//single image
/*	right.onclick = function(e){
		add++;
		result.textContent = add;
		//comparar con el stock como maximo -> length from database = max
	}

	left.onclick = function(e){
		if(add!=0){
			add--;
			result.textContent = add;
		}
	}*/