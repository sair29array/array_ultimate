<?php 
  $u = $user -> GetDatosUser($_SESSION["login_user"]);
 foreach ($u as $uu) { }
 ?>
<!-- Section: Social newsfeed v.1 -->

<!-- Section: Social newsfeed v.1 -->
<br>
<div class="card" id="app">
  
  <div class="card-header">
    <h4 id="d"><b>Discusión</b></h4>
  </div>
  <div class="card-body ">
       <div class="form-group">
          <label for="exampleFormControlTextarea2">Haz un comentario</label>
          <div class="col-12"> 
            <div class="row">
              <div class="col-md-1">
                <h1><i class="fa fa-user-circle grey-text"></i></h1>
              </div>
              <div class="col-md-11">
                <h5> </i><?php echo " ". $uu["nombre_completo"]; ?></h5>
                <h5><span style="width: 100%;" v-if="vacio" class="badge red">{{message}}</span></h5>
                <textarea v-model="comentario" @click="vacio=false" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
              </div>
            </div>
             <button @click="addComentario()" class="btn btn-primary float-right" type="submit">Agregar comentario</button>
          </div>

      </div>
     
  </div>

  
  <?php include("comentarios.php"); ?>

</div>


<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue"></script>

<script>
var id_user = "<?php echo $uu["id"]  ?>";
    var id_leccion = "<?php echo $_GET["Watch"] ?>";

  var app = new Vue({
  el: '#app',
  data: {
    comentario:"",
    respuesta: "",

    comentario_edit: new_com, /// el nuevo comentario apra editar

    id_comentario_delete: "",
    id_respuesta_delete: "",

    Editar_Comentario_: false,  /// id del comentraio a editar

    lo_que_se_quiere_editar_esta_vacio: false,

    edit_respuesta: false, // id
    respuesta_edit: new_res,/// respuesta a actualizar
    

    message: '', // indica si hay errores al momento de añadir un comentario

    messager: '', // indica si hay errores al momento de añadir una respuesta

    vacio: false, // caja de texto de cmentario
    vacio_r: false,  /// caja de texto de respuesta a comentario

    id_user: id_user,
    id_leccion: id_leccion,
    reply_: false, // responder a un comentario (esta var guarda el id del comentario que se va a responder)

    respuesta_escondida:  ""

  },
  methods:
  {
    addComentario()
    {
      if (app.comentario == "") 
      {
        app.vacio = true;
        app.message = "Por favor añade texto al comentario";
      }else
      {


        var formData = new FormData();
        formData.append('comentario', this.comentario);
        formData.append('id_leccion', this.id_leccion);
        formData.append('id_user', this.id_user);

                axios.post("../in/drivers/add_comentarios.php?action=read",formData)
                        .then(function(response) {
            
            console.log(response);
                datos = response.data;
                
        if (datos.resultt  == "1")
          {

           location.reload();
          }
        
                                
        })
        .catch(function (error) {
            console.log(error);
        });
         


      }
    },
    reply(comentario) // responder a un comentario (activar la caja de respuesta)
    {
      app.reply_ = comentario;
      app.vacio_r = false;
    },

    responder() // agregar respuesta
    {
      if (app.respuesta == "") 
      {
        app.vacio_r = true;
        app.messager = "Por favor añade texto a tu respuesta";
      }else
      {
            var formData = new FormData();
        formData.append('respuesta', this.respuesta);
        formData.append('reply_', this.reply_);
        formData.append('id_user', this.id_user);
                axios.post("../in/drivers/add_respuestas_comentarios.php?action=read",formData)
                        .then(function(response) {
            
            console.log(response);
                datos = response.data;
                
        if (datos.resultt  == "1")
          {

            //window.location = "./"+datos.leccion;
          }
        
                                
        })
        .catch(function (error) {
            console.log(error);
        });
        location.reload();
      }
    },
    eliminar_comentario(id)
    {

      app.id_comentario_delete = id;

          var formData = new FormData();
        formData.append('id_comentario_delete', this.id_comentario_delete);
                axios.post("../in/drivers/eliminar_comentario.php?action=read",formData)
                        .then(function(response) {
            
            console.log(response);
                datos = response.data;
                  
        })
        .catch(function (error) {
            console.log(error);
        });

        location.reload();
    }, 

    eliminar_respuestas(id)
    {
           app.id_respuesta_delete = id;


          var formData = new FormData();
        formData.append('id_respuesta_delete', this.id_respuesta_delete);
                axios.post("../in/drivers/eliminar_respuestas.php?action=read",formData)
                        .then(function(response) {
            
            console.log(response);
                datos = response.data;
                  
        })
        .catch(function (error) {
            console.log(error);
        });

        //// la escondemos 
        app.respuesta_escondida = id;

        if (app.respuesta_escondida != "") { location.reload();}
    },

    Editar_Comentario(id)
    {
      app.Editar_Comentario_ = id;

    },
    Edit_coment() // editar comentarios
    {
      if (new_com == "") 
      {
        app.lo_que_se_quiere_editar_esta_vacio = true;
      }else{
        app.comentario_edit = new_com;

        var formData = new FormData();
        formData.append('Editar_Comentario_', this.Editar_Comentario_); // id
        formData.append('comentario_edit', this.comentario_edit);
        

                axios.post("../in/drivers/edit_comentarios.php?action=read",formData)
                        .then(function(response) {
            
            console.log(response);
                datos = response.data;
                
        if (datos.resultt  == "1")
          {

           location.reload();
          }
        
                                
        })
        .catch(function (error) {
            console.log(error);
        });
         

      }

    },

    Editar_respuesta(id)
    {
     app.edit_respuesta = id;  /// id de la respuesta que se va a editar
     
    },

    Editar_respuesta_()
    {
      if (new_res == "") 
      {
        app.lo_que_se_quiere_editar_esta_vacio = true;
      }else {
        app.respuesta_edit = new_res;

        var formData = new FormData();
        formData.append('edit_respuesta', this.edit_respuesta); // id
        formData.append('respuesta_edit', this.respuesta_edit);
        

                axios.post("../in/drivers/edit_respuesta_a_comentario.php?action=read",formData)
                        .then(function(response) {
            
            console.log(response);
                datos = response.data;
                
        if (datos.resultt  == "1")
          {

          location.reload();
          }
        
                                
        })
        .catch(function (error) {
            console.log(error);
        });
      }
    }




  }
})
</script>