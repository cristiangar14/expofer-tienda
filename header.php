<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Library -->
    <link rel="stylesheet" href="./owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./owlcarousel/owl.theme.default.min.css">
    

    <!--flexslider-->
    <link rel = "stylesheet" href = "./style/flexslider.css" type = "text / css">

    <!--font awesome-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" crossorigin="anonymous"></script>


    <!-- Custom Style -->
    <link rel="stylesheet" href="./style/normalize.css">
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    
    <title>Expofer</title>
</head>
<body>
    
    <header class="header">
        <div class="header-barraSuperio">
            <div class="header-barraSuperio-social">
                <a href="#" class="iconHeader"><span class="fab fa-facebook-f"></span></a>
                <a href="#" class="iconHeader"><span class="fab fa-instagram"></span></a>
                <a href="#" class="iconHeader"><span class="fab fa-youtube"></span></a>
                <a href="#" class="iconHeader"><span class="fab fa-whatsapp"></span></a>
            </div>
            
            <div class="header-barraSuperio-log">
                <div class="">
                    <div class="header-barraSuperio-log-elemento"> 
                        <div class="header-barraSuperio-log-btn"><button id="btnLogin"><span class="iconHeader iconLogin far fa-user"></span> INGRESAR</button>
                            <div id="login" class="login-cerrado">
                                <form class="contendor-form-login" action="">
                                    <h5>MI CUENTA</h5>
                                    <div class="form-login-inputs">
                                            <label for="usuario">USUARIO</label>
                                            <input type="text" name="usuario" id="usuario">
                                            <label for="password">CONTRASEÑA</label>
                                            <input type="password" name="password" id="password">
                                            <ul>
                                                <li><a href="/">OLVIDE MI CONTRASEÑA</a></li>
                                                <li><a href="/">CREAR UNA CUENTA</a></li>
                                            </ul>
                                    </div>
                                    <div>
                                        <button class="btn-ingresar">INGRESAR</button>
                                    </div>
                                </form>
                            </div>
                        </div> 
                        <div class="header-barraSuperio-log-btn"><button id="btnCarrito"><span class="iconHeader iconLogin fas fa-cart-plus"></span>CARRITO (3)</button>
                            <div id="carritoActivo" class="btn-carrito-inactivo">
                                <h5>PRODUCTOS EN TU CARRITO</h5>
                                    <div class="producto-en-carrito">
                                        <img class="producto-en-carrito-imagen" src="./img/paginaProducto/aspiradora2.png" alt="carrito-imagen-producto">
                                        <div class="producto-en-carrito-producto" >
                                            <h6>ASPIRADORA KARCHER WD1</h6>
                                            <select name="" id="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="producto-en-carrito-valor" >
                                            <p>600,000</p>
                                            <button class="btnBorrar"><span class="far fa-trash-alt"></span></button>
                                        </div>
                                    </div>
                                    <div class="producto-en-carrito">
                                        <img class="producto-en-carrito-imagen" src="./img/paginaProducto/aspiradora2.png" alt="carrito-imagen-producto">
                                        <div class="producto-en-carrito-producto" >
                                            <h6>ASPIRADORA KARCHER WD1</h6>
                                            <select name="" id="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="producto-en-carrito-valor" >
                                            <p>600,000</p>
                                            <button class="btnBorrar"><span class="far fa-trash-alt"></span></button>
                                        </div>
                                    </div>
                                    <div class="producto-en-carrito">
                                        <img class="producto-en-carrito-imagen" src="./img/paginaProducto/aspiradora2.png" alt="carrito-imagen-producto">
                                        <div class="producto-en-carrito-producto" >
                                            <h6>ASPIRADORA KARCHER WD1</h6>
                                            <select name="" id="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="producto-en-carrito-valor" >
                                            <p>600,000</p>
                                            <button class="btnBorrar"><span class="far fa-trash-alt"></span></button>
                                        </div>
                                    </div>
                                <div class="carrito-activo-resumen">
                                    <div class="carrito-activo-resumen-item">
                                        <p>ENVIO</p>
                                        <p>$598</p>
                                    </div>
                                    <div class="carrito-activo-resumen-item">
                                        <p>IMPUESTO</p>
                                        <p>$199</p>
                                    </div>
                                    <div class="carrito-activo-resumen-item">
                                        <p>COMPRA</p>
                                        <p>$139</p>
                                    </div>
                                    <div class="carrito-activo-resumen-item carrito-activo-resumen-total">
                                        <p>TOTAL</p>
                                        <p>$1,150,000</p>
                                    </div>
                                </div>
                                <a class="btn-irACarrito" href="carrito.php">IR AL CARRITO</a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="header-barraInferio">
            <div>
                <img class="logo-expofer" src="img/logo.png" alt="logo Expofer">
            </div>
            <div id="btnMenu" class="menu-icon">
                <span  class="menu-icon fas fa-bars"></span>
            </div>
            <nav id="nav" class="nav">
                <ul id="contenedorNav" class="contenedor-nav">
                    <li id="btnInicio" class="link-nav">
                        <a class="" href="index.php"><strong>INICIO</strong></a>
                    </li>
                    <li id="btnProductos" class="link-nav">
                        <a class="" href="productos.php"><strong>PRODUCTOS</strong></a>
                    </li>
                    <li id="btnServicioTecnico" class="link-nav">
                        <a class="" href="servicioTenico.php"><strong>SERVICIO TÉCNICO</strong></a>
                    </li>
                    <li id="btnNosotros" class="link-nav">
                        <a class="link-nav" href="nosotros.php"><strong>NOSOTROS</strong></a>
                    </li>
                    <li id="btnAccesorios" class="link-nav">
                        <a class="" href="#"><strong>ACCESORIOS</strong></a>
                    </li>
                    <div id="navMenu" class="nav-inactivo">
                        <div class="contenedor-nav-activo">
                            <div class="contenedor-nav-activo-primera">
                                <h5 class="link-nav-activo">PRODUCTOS</h5>
                                <div class="contenedor-nav-activo-primera-lista">
                                    <ul><h6>CATEGORIAS</h6>
                                        <li><a href="/">Hidrolavadoras</a></li>
                                        <li><a href="">Compresores</a></li>
                                        <li><a href="">Bombas</a></li>
                                        <li><a href="">Plantas eléctricas</a></li>
                                        <li><a href="">Aspiradoras</a></li>
                                        <li><a href="">Guadañadoras</a></li>
                                        <li><a href="">Motosierras</a></li>
                                        <li><a href="">Cortasetos</a></li>
                                        <li><a href="">Fumigadoras</a></li>
                                        <li><a href="">Sopladora</a></li>
                                        <li><a href="">Cortasesped</a></li>
                                        <li><a href="">Teractores</a></li>
                                        <li><a href="">Limpiadores a vapor</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="contenedor-nav-activo-segunda">
                                <h6>PRODUCTOS DESTACADOS</h6>
                                <div class="menu-cards">
                                    <div class="menu-card">
                                        <img class="imagen-menu-abierto" src="./img/bidon.png" alt="Prducto Bidon">
                                        <h6>BIDON</h6>
                                        <p>Accesorios para Motosierras </p>
                                        <div class="card-precio">
                                            <p class="signo-pesos">$</p>
                                            <p class="menu-card-valor">230.000</p>
                                        </div>
                                    </div>
                                    <div class="menu-card">
                                        <img class="imagen-menu-abierto" src="./img/bidon.png" alt="bidon">
                                        <h6>BIDON</h6>
                                        <p>Accesorios para Motosierras </p>
                                        <div class="card-precio">
                                            <p class="signo-pesos">$</p>
                                            <p class="menu-card-valor">230.000</p>
                                        </div>
                                    </div>
                                    <div class="menu-card">
                                        <img class="imagen-menu-abierto" src="./img/bidon.png" alt="bidon">
                                        <h6>BIDON</h6>
                                        <p>Accesorios para Motosierras </p>
                                        <div class="card-precio">
                                            <p class="signo-pesos">$</p>
                                            <p class="menu-card-valor">230.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </nav>
            <form action="#" id="search" class="search">
                <input id="searchInput" type="text" class="search-input" label="search" placeholder="Buscar">
                <button id="buscarBtn" type="submit" class="search-btn"><img src="img/buscar.png" alt="buscar"></button>
            </form>
        </div>
    </header>