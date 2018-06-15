<!DOCTYPE html>
<html>
<head>
	<title>EMPRESA CONCELAC | Bienvenido </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" >
	<meta name="description" content="PLANTA LECHERA CONCELAC" >
	<meta name="keywords" content="LACTEOS" >
	<meta name="author" content="RUTH" >
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body>
<?php require_once('conexion.php'); ?>
   <header>
   	<div class="contenedor">
   		<div id="marca">
   			<h1><span class="resaltado">Planta Lechera</span> Concelac</h1>
   		</div>
   		<nav>
   			<ul>
   				<li ><a href="index.html">Inicio</a></li>
   				<li class="actual"><a href="nosotros.html">Nosotros</a></li>
   				<li><a href="productos.html">Productos</a></li>
   				<li><a href="contacto.html">Contacto</a></li>
   			</ul>
   		</nav>
   	</div>
   </header>
   
   <section id="boletin">
       <div class="contenedor">
        
           <h1>Suscribete a nuestra pagina</h1>
           <form>
               <input type="email" name="email" placeholder="Ingrese el email...">
               <button type="submit" class="boton1">Suscribete</button>
           </form>
       </div>
   </section>
   <section id="main">
       <div class="contenedor">
           <article>
           
           <h1>Nosotros</h1>
           <p>---------------------------------------------------------------------------</p>
           <p class="oscuro">
               --------------------------------------------------------

           </p>
           <img src="img/" width="740">
           </article>
           <aside id="lateral">
               <div class="oscuro">
                   <h3>Que hacemos</h3>
                   <p>--------------------------------</p>

               </div>

           </aside>

       </div>

   </section>
   <FOOTER>
       <P>Empresa CONCELAC, Copyright &copy; 2018</P>
   </FOOTER>
</body>
</html>