<?php  ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>




            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Notas || tareas</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div id="app" class="row">
                <div class="col-lg-12">
                    <div class="  panel panel-default">
                        <div class="panel-heading">
                          <?php 
                            if (!isset($_POST["fecha_busqueda"])) {
                                 echo " Fecha:   Hoy: ". date("d")." de ". date("m")." de 20". date("y");
                                 $date_actual = "20".date("y")."-" .date("m")."-" .date("d"); 
                                 $notas = $sair-> get_notas($id_admin, $date_actual); 
                            }else{
                                $buscar_por_fecha = $_POST["fecha_post"];
                                echo "Notas de: " . $buscar_por_fecha;
                                 $notas = $sair-> get_notas($id_admin, $buscar_por_fecha); 
                            }
                           ?> 
                           
                           <form method="POST" action="">
                               <input type="date" required="true" name="fecha_post">
                               <button type="submit" name="fecha_busqueda"><i class="fa fa-search "></i></button>
                               <button @click="agregar_nota= true" type="button"><i class="fa fa-plus "></i></button>
                           </form>
                           <br>
                          
                           

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-responsive"  id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>Notas || Tareas</th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <form  method="POST" action="" class="form-group">
                                                <td v-if="agregar_nota">
                                                <label>
                                                    Escribe tu nota:
                                                    <textarea @click="vaciar_errores()" v-model="Nota"  name="Nota" class="form-group" rows="3" cols="40"></textarea> 
                                                </label>

                                                <label>
                                                    Mostrar en:
                                                    <input  @click="vaciar_errores()" v-model="fecha" name="fecha"  class="form-group" type="date" name="">
                                                </label>
                                                </td>

                                                <td v-if="agregar_nota"><button v-if="!nota_guardada" @click="agregarNota()"  type="button" name="guardar_nota" class="form-group btn btn-default" >Guardar</button>
                                                    <div v-if="!alert_error">
                                                        <button disabled="true" v-if="nota_guardada" class="form-group btn btn-success dissabled"  >¡Guardada!</button>
                                                    </div>
                                                    <button  disabled="true" v-if="alert_error" class="form-group btn btn-danger dissabled"  >¡La nota necesita una descripción y una fecha para mostrar!</button>

                                                    <button  disabled="true" v-if="fecha_nota_vacia" class="form-group btn btn-danger dissabled"  >¡Define la fecha en la que se mostrará la nota!</button>

                                                    <button  disabled="true" v-if="nota_vacia" class="form-group btn btn-danger dissabled"  >¡Define la descripción de la nota!</button>
                                                    
                                                </td>
                                            </form>
                                            <td></td>
                                            <td></td>
                                        
                                        <?php 

                                        /*if (isset($_POST["guardar_nota"])) {
                                            $sair->GuardAnota($_POST["fecha"],$_POST["Nota"]);
                                        }*/

                                            foreach ($notas as $n) {
                                                ?>
                                                <tr>

                                                    <td><?php echo $n["nota_o_tarea"]; ?></td>
                                                    <td><a href="">Marcar como hecho</a></td>
                                                </tr>
                                                <?php 
                                            }
                                         ?>
                                      
                                      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <!--div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div-->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
    

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

  

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue"></script>


<script type="text/javascript">
var id_admin = "<?php echo $id_admin; ?>   "; 
    var app = new Vue({
  el: '#app',
  data: {
    agregar_nota: false,
    Nota: "",
    fecha: "",
    id_ad: id_admin,
    nota_guardada: false,
    alert_error: false,
    nota_vacia: false,
    fecha_nota_vacia: false

  },

  methods: {
    agregarNota()
    {
        app.nota_guardada = true;
        var formData = new FormData();
        formData.append('Nota', this.Nota);
        formData.append('fecha',this.fecha);
        formData.append('id_ad',this.id_ad);
                axios.post("../dashboard/views/volatiles/set_notas.php?action=read",formData)
                        .then(function(response) {
            
            console.log(response);
                datos = response.data;
                
        if (datos.resul  == "0")
          {
                app.alert_error=true;
           }else if (datos.resul  == "2") 
           {
            app.nota=true;
           }else if (datos.resul == "3") 
           {
                app.fecha_nota_vacia=true;
           }

                          
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
    },
        vaciar_errores()
        {
            app.nota_guardada =  false;
            app.alert_error =  false;
            app.nota_vacia =  false;
            app.fecha_nota_vacia =  false;    
        }
  }
})
</script>
           



