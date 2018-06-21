
<?php
            require_once('conexion.php');

            $conn = dbConexion(); 


            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt1 = $conn->prepare("INSERT INTO contacto(nombre,email, telefono,celular,mensaje) VALUES (:nom, :email, :telf, :cel, :sms)");
            
            $stmt1->bindParam(':nom', $nombre);
            $stmt1->bindParam(':email', $email);
            $stmt1->bindParam(':telf', $telefono);
            $stmt1->bindParam(':cel', $celular);
            $stmt1->bindParam(':sms', $mensaje);

            $nombre = $_REQUEST["nombre"];
            $email = $_REQUEST["email"];
            $telefono = $_REQUEST["telefono"];
            $celular = $_REQUEST["celular"];
            $mensaje = $_REQUEST["mensaje"];

            if($stmt1->execute()){
                echo 'envio';
            }
            //header('Location: ../index.php');
            /*print '	<div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p class="text-center"><strong>¡Nuevo artículo guardado satisfactoriamente!</strong></p>
                    </div>';*/
            //Error
            print '	<div id="addItemAlert" class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  	<p class="text-center"><strong>¡Nuevo artículo guardado satisfactoriamente!</strong></p>
            </div>';
?>
