//login
let btnlogin = document.getElementById('btnLogin');
let login = document.getElementById('login');

const loginActivo = 'login-abierto';

btnlogin.addEventListener('mouseover', function(){
    login.className = (loginActivo)
})

login.addEventListener('mouseover', function(){
    login.className = (loginActivo)
})

login.addEventListener('mouseout', function (){
    login.classList.remove(loginActivo);
    login.className = ('login-cerrado');
})


//carrito
let btnCarrito = document.getElementById('btnCarrito');
let contenedorCarrito = document.getElementById('carritoActivo');

let carritoActivo = 'btn-carrito-activo';
let carritoInActivo = 'btn-carrito-inactivo';

let contadorCarrito = 0;

btnCarrito.addEventListener('click', function(){
    if(contadorCarrito ==0){
        contenedorCarrito.className = (carritoActivo);
        contadorCarrito = 1;

    }else{
        contenedorCarrito.classList.remove(carritoActivo);
        contenedorCarrito.className = (carritoInActivo);
        contadorCarrito = 0;
    }
})



//nav

let btnInicio = document.getElementById('btnInicio');
let navMenu = document.getElementById('navMenu');

btnInicio.addEventListener('mouseover', function(){
    btnInicio.className = ('link-nav-activo');
    navMenu.className = ('nav-activo');
})

navMenu.addEventListener('mouseover', function(){
    btnInicio.className = ('link-nav-activo');
    navMenu.className = ('nav-activo');
})

navMenu.addEventListener('mouseout', function(){
    btnInicio.classList.remove('link-nav-activo');
    navMenu.classList.remove('nav-activo');
    btnInicio.className = ('link-nav')
    navMenu.className = ('nav-inactivo');

})

//nav responsive

let btnMenu = document.getElementById('btnMenu');
let menu = document.getElementById('nav');
let contadorMenu=0;

btnMenu.addEventListener('click', function(){
    if(contadorMenu == 0){
        menu.className = ('nav-responsive-abierto');
        contadorMenu = 1;
    }else{
        menu.classList.remove('nav-responsive-abierto');
        menu.className = ('nav')
        contadorMenu = 0;
        console.log(contadorMenu)
    }

})


//leer el texto del input buscar
document.getElementById('buscarBtn').addEventListener('click', (e) =>{
    e.preventDefault();

const textoBuscador = document.getElementById('searchInput').value;
console.log(textoBuscador);
})




