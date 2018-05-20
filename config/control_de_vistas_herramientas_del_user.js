  var app = new Vue({
        el: '#v_cuenta',
    data: 
    {
        tu_actividad: false,
        datos_personales: false,
        puntos_yDescuentos: false,
        sugerencias: false,
        facturacion: false,
        notificaciones: true,
        ver_herramientas: true,

        ///////////Cambiar contraseña////////
        id_user: id_user ,
        actualpass: "", ////// esta es la que va a poner el usuario para comprobar que se sabe la pass actual
        newpass:"", //// nueva pass
        confirmnewpass:"",
        
        passw:  passActual , /// esto se obtiene desde la base de datos PHP Y MySql  var   cedula =  <?php echo $cedulaActual;?> 
        /// esta es la pass actualmente en la DB
        PassUpdate: false, ////// es una variable booleana que es usada para aavisar si ya fue o no actualizada la pass del user


        //////////// DATOS USER PARA ACTUALIZAR  ///////////////

        UpdateDataUser: false

       
    },

    methods: 
    {

        ver(q)
        {
            if (q == 1) 
                { 
                    app.tu_actividad = true; 
                    app.datos_personales = false;
                    app.puntos_yDescuentos = false;
                    app.sugerencias = false;
                    app.facturacion = false;
                    app.ver_herramientas = false;
                }
                else if (q == 2) 
                    {
                        app.tu_actividad = false; 
                        app.datos_personales = true;
                        app.puntos_yDescuentos = false;
                        app.sugerencias = false;
                        app.facturacion = false;
                        app.ver_herramientas = false;

                    }
                    else if (q == 3) 
                        {
                            app.tu_actividad = false; 
                            app.datos_personales = false;
                            app.puntos_yDescuentos = true;
                            app.sugerencias = false;
                            app.facturacion = false;
                            app.ver_herramientas = false;
                        }
                        else if (q == 4) 
                            {
                                app.tu_actividad = false; 
                                app.datos_personales = false;
                                app.puntos_yDescuentos = false;
                                app.sugerencias = true;
                                app.facturacion = false;
                                app.ver_herramientas = false;
                            }
                            else if (q == 5) 
                                {
                                    app.tu_actividad = false; 
                                    app.datos_personales = false;
                                    app.puntos_yDescuentos = false;
                                    app.sugerencias = false;
                                    app.facturacion = true;
                                    app.ver_herramientas = false;
                                }

        },

        cambiar_contrasena()
        {
                // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
            var formData = new FormData();
            formData.append('newpass', this.newpass);
            formData.append('id_user', this.id_user);
                    axios.post("config/cambiar_pass.php?action=read",formData)
                            .then(function(response) {
                
                console.log(response);
                    datos = response.data;
                    
            if (datos.resul  == 1)
              {
                     
                     app.PassUpdate = true;
                }
                           
                            })
                            .catch(function (error) {
                                console.log(error);
                            });

        },

          redirect()
            {
                location.href="./?:=MiCuenta&*"
            }




    }





});

