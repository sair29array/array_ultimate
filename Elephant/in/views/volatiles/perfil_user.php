<?php 
 $u = $user -> GetDatosUser($_SESSION["login_user"]);
 foreach ($u as $uu) { }


if ($_GET["Et_id"]=="PerfilErr") {
	$err = "¡El correo que intentas tomar ya está siendo usado!";
}
 ?>
 







<!-- Default form login -->
<form method="POST" action="">
    <p class="h4 text-left mb-4"><i class="fa fa-user"></i> Tu perfil</p>

    <div class="col-12">
    	 <div class="col-md-6 card">
		    <div class="p-4">

		    	<p class="red-text" ><?php echo @$err; ?></p >
		    	 	 	<!-- Default input email -->
		    <label for="defaultFormLoginEmailEx" class="grey-text">Nombre: </label>
		    <input value="<?php echo $uu["nombre_completo"]; ?>" name= "nombre" required="true" type="text" id="defaultFormLoginEmailEx" class="form-control">

		    <br>

		    <!-- Default input password -->
		    <label for="defaultFormLoginPasswordEx" class="grey-text">Correo:</label>
		    <input value="<?php echo $uu["email"]; ?>" name= "correo" required= "true" type="email" id="defaultFormLoginPasswordEx" class="form-control">

		    <label  class="grey-text">Contraseña:</label>
		    <input value="<?php echo $uu["pass"]; ?>" required="true" name= "pass" type="password"  class="form-control">

		    <div class="text-center mt-4">
		        <button class="btn btn-indigo" type="submit" name="update"> <i class="fa fa-edit"></i> Actualizar</button>
		        <a href="../in/index.php?ds" class="btn btn-indigo"><i class="fa fa-power-off"></i> Cerrar sesión</a>
		         
		    </div>
		    </div>
    	 </div>
    </div>
</form>
<!-- Default form login -->


<?php 
		if (isset($_POST["update"])) 
		{
			$correo = $_POST["correo"];
			$nombre = $_POST["nombre"];
			$pass = $_POST["pass"];

			$user -> UpdateDataUser($uu["id"],$nombre,$correo,$pass);
		}

 ?>