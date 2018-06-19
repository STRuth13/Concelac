 
<?php
require 'conexion.php';
if (isset($_POST['btn'])) {
    $sql = "INSERT INTO tarea (nombre , direccion, email, mensaje) VALUES (:nombre , :direccion, :email, :mensaje)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':email', $_POST['direccion']);
    $stmt->bindParam(':telefono', $_POST['email']);
    $stmt->bindParam(':celular', $_POST['mensaje']);

    try {
        if ( $stmt->execute()) {
           echo "envio";
        }
       
      //die('Successfully created new user');
    } catch(exception $e) {
      die ('Sorry there must have been an issue creating your account');
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>EMPRESA CONCELAC | Contacto </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" >
	<meta name="description" content="PLANTA LECHERA CONCELAC" >
	<meta name="keywords" content="LACTEOS" >
	<meta name="author" content="RUTH" >
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<?php require_once('header.php'); ?>
   
   <section id="boletin">
       <div class="contenedor">
        
           <h1>Suscríbete a nuestra página</h1>
           <form>
               <input type="email" name="email" placeholder="Ingrese el email...">
               <button type="submit" class="boton1">Suscríbete</button>
           </form>
       </div>
   </section>
   <section id="main">
       <div class="contenedor">
           <article id="main-col">
               <h1>Contacto</h1>
               <form method "POST">
                   <label>Nombre</label>
                   <input type="text" name"nombre"  placeholder="Ingresa tu nombre">
                   <br>
                   <label>Email</label>
                   <input type="text" name"email" placeholder="Ingresa tu email">
                   <br>
                   <label>Telefono</label>
                   <input type="text" name"telefono" placeholder="Ingresa tu telefono">
                   <br>
                   <label>Celular</label>
                   <input type="text" name"celular" placeholder="Ingresa tu celular">
                   <br>
                   <label>Mensaje</label>
                   <textarea></textarea>
                   <br>
                   <input type="submit" name = "btn" value="Enviar">
               </form>
               

           </article>
           <aside id="lateral">
               <div class="oscuro">
                   <h3>Que hacemos</h3>
                   <p>Empresa dedicada a la industrialización de productos lácteos mejorando la
                        calidad alimenticia para satisfacer el paladar más exigente. 
                        Nos preocupamos por mejorar permanentemente 
                       las bondades alimenticias y naturales de nuestros alimentos.</p>

               </div>

           </aside>

       </div>

   </section>
   <FOOTER>
       <P>Empresa CONCELAC, Copyright &copy; 2018</P>
   </FOOTER>
</body>
</html>