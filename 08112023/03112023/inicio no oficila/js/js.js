let span = document.getElementsByTagName('span');
	let product = document.getElementsByClassName('product')
	let product_page = Math.ceil(product.length/4);
	let l = 0;
	let movePer = 25.34;
	let maxMove = 203;
	// mobile_view	
	let mob_view = window.matchMedia("(max-width: 768px)");
	if (mob_view.matches)
	 {
	 	movePer = 50.36;
	 	maxMove = 504;
	 }

	let right_mover = ()=>{
		l = l + movePer;
		if (product == 1){l = 0; }
		for(const i of product)
		{
			if (l > maxMove){l = l - movePer;}
			i.style.left = '-' + l + '%';
		}

	}
	let left_mover = ()=>{
		l = l - movePer;
		if (l<=0){l = 0;}
		for(const i of product){
			if (product_page>1){
				i.style.left = '-' + l + '%';
			}
		}
	}
	span[1].onclick = ()=>{right_mover();}
	span[0].onclick = ()=>{left_mover();}

	document.getElementById("loginBtn").addEventListener("click", function(){
		document.getElementById("userData").innerHTML = `
		  <p>Bienvenido ${user.name}!</p>
		  <p>Tu ID de sesión es: ${user.sessionId}</p>
		`;
	  
	  });

	  const carrito1 = [];
const carrito2 = [];
const carrito3 = [];

// Botones para añadir a carritos 
const btnCarrito1 = document.getElementById('btnCarrito1');
const btnCarrito2 = document.getElementById('btnCarrito2');
const btnCarrito3 = document.getElementById('btnCarrito3');

// Al clic en botón 1
btnCarrito1.addEventListener('click', () => {
  // Añadir producto a carrito 1
});

// Al clic en botón 2  
btnCarrito2.addEventListener('click', () => {
  // Añadir producto a carrito 2
});

// Al clic en botón 3
btnCarrito3.addEventListener('click', () => {
  // Añadir producto a carrito 3
});

// Función para mostrar carrito 1
function mostrarCarrito1() {
  // Obtener productos de carrito1 y mostrar en DOM
}

// Función para mostrar carrito 2
function mostrarCarrito2() {
  // Obtener productos de carrito2 y mostrar en DOM
}

// Función para mostrar carrito 3
function mostrarCarrito3() {
  // Obtener productos de carrito3 y mostrar en DOM
}