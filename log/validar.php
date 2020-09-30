		<?php
			include '../administrador/conexion.php';
            session_start();
			if(!empty($_POST)){
				
				$correo = htmlentities(mysqli_real_escape_string($conexion,$_POST['correo']));
				$pw = htmlentities(mysqli_real_escape_string($conexion,$_POST['password']));
                  
                $query = "SELECT * FROM usuarios WHERE email_user ='$correo' AND pass_user = '$pw'";
                $result = mysqli_query($conexion,$query);

				if (mysqli_num_rows($result)>0) {
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $_SESSION["nivel"] = $row['nivel_user'];
                    $_SESSION["user"] = $correo;
                    
                       if($_SESSION["nivel"] == 1){
                        echo '<script> window.location="../administrador/admin.php"; </script>';    
                       } else if ($_SESSION["nivel"] == 2){
                    echo '<script> window.location="../docentes/docentes.php" </script>';
                       } else if($_SESSION["nivel"] == 3){
                    echo '<script> window.location="../padres/padres.php" </script>';   
                       } 
                } else {   
                    echo '<script> alert("Usuario o contraseña incorrectos. ");</script>';
					echo '<script> window.location="../log/login.php"; </script>';
                    }
            }
		?>
