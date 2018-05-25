<?php  ?>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div id="landing" class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="./" >
        <strong>Elephant <img class="img img-responsive" src="img/elephant.png"></strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
         
        </ul>

        <!-- Right -->
        <div v-if="!registro">
        	<ul v-if="!Login" class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a @click="Login = true" class="nav-link border border-light rounded"
              >
              <i class="fa fa-sign-in mr-2"></i>Iniciar sesión
            </a>
          </li>
          <div>|</div>
          <li class="nav-item">
            <a @click="registro = true" class="nav-link border border-light rounded"
             >
              <i class="fa fa-edit mr-2"></i>Registro
            </a>
          </li>
        </ul>
        </div>
        
        <h4 v-if="action" > <span class="badge amber darken-2">{{Respuesta}}</span></h4>
        &nbsp;
        <form  v-if="Login" method="POST" action="">
        			
        			<input v-model="email"  @click="action=false" type="email" name="" placeholder="Correo electrónico">
        		
        			<input v-model="pass" @click="action=false"  type="password" name="" placeholder="Contraseña">

        			<button type="button" style="cursor: pointer;" v-on:click="login_" >Entrar</button>

              <i  style="cursor: pointer;"  class="fa fa-times text-white" @click="react()" ></i>
        	
        </form>

        <form  v-if="registro" method="POST" action="">
        		
        			<input  v-model="nombre_completo" type="text" name="" placeholder="Tu nombre completo">
        			<input v-model="email" type="email" name="" placeholder="Correo electrónico">
        		
        			<input v-model="pass"  type="password" name="" placeholder="Contraseña">
        			<button type="button" style="cursor: pointer;" v-on:click="registro_" >Registrarme</button>
        			
              <i  style="cursor: pointer;"  class="fa fa-times text-white" @click="react()" ></i>
        	
        </form>

        
  
        

      </div>

    </div>
  </nav>

  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://unpkg.com/vue"></script>
  <!-- Navbar -->
  <script>
 var app = new Vue({
  el: '#landing',
  data: {
  	nombre_completo: '',
    Login: false ,
    email:'',
    pass:'',
    registro: false,
    action: false,
    Respuesta: ''

   
  },


   methods: 
   {
      login_()
      {

        var formData = new FormData();
        formData.append('email', this.email);
        formData.append('pass',this.pass);
                axios.post("config_landing/process_login.php?action=read",formData)
                        .then(function(response) {
            
            console.log(response);
                datos = response.data;
                
        if (datos.resul  == 0)
          {
   			app.action = true;
   			app.Respuesta = "¡Los datos no coinciden!";
          }else if (datos.resul  == 1) 
          {
          	var page = "./?:=login&user="+datos.resultt;
                
                location.href=page;
          	app.action = true;
   			app.Respuesta = "¡Bienvenid@!";
          }else if (datos.resul  == 2) 
          {
          	app.action = true;
   			app.Respuesta = "¡Llena todos los campos!";
          }
        
         
                                
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
         
      },

      registro_()
      {
      		 var formData = new FormData();
        formData.append('email', this.email);
        formData.append('pass',this.pass);
        formData.append('nombre_completo',this.nombre_completo);
                axios.post("config_landing/process_registro.php?action=read",formData)
                        .then(function(response) {
            
            console.log(response);
                datos = response.data;
                
        if (datos.resul  == 00)
          {
   			app.action = true;
   			app.Respuesta = "¡Este correo ya existe!";
          }else if (datos.resul  == 11) 
          {
          	app.action = true;
   			app.Respuesta = "¡Bienvenid@!";
   			var page = "./?:=login&user="+datos.resultt;
            location.href=page;
          }else if (datos.resul  == 22) 
          {
          	app.action = true;
   			app.Respuesta = "¡Llena todos los campos!";
          }
        
         
                                
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
      },

      react()
      {
        app.Login=false;
        app.registro=false;
        app.action=false;
      }


    }   
})

</script>