
             <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div id="uuuu" class="card-body">

                            <!-- Table  -->
                            <table class="table  ">
                                
                               
                                <h4 v-show="!unidad4" style="cursor: pointer;" @click="unidad4 = true">4. Programación web con php <i v-show="!unidad4" class="fa fa-caret-right mt-auto"></i><i v-show="unidad4" class="fa fa-caret-down mt-auto"></i></h4>

                                <h4 v-show="unidad4" style="cursor: pointer;" @click="unidad4 = false">4. Programación web con php <i v-show="!unidad4" class="fa fa-caret-right mt-auto"></i><i v-show="unidad4" class="fa fa-caret-down mt-auto"></i></h4>
                                <!-- Table body -->
                                <!-- Table body -->
                                <tbody v-show="unidad4">
                                    
                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Diferencia entre las apps web y las páginas web</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Diferencia-entre-las-apps-web-y-las-páginas-web">Ver</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> MVC y comienzo de proyecto</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/MVC-y-comienzo-de-proyecto">Ver</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Creando-un-login</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Creando-un-login">Ver</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Registro-de-usuarios</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Registro-de-usuarios">Ver</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Recuperando-credenciales</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Recuperando-credenciales">Ver</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Categorías-de-foros</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Categorías-de-foros">Ver</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Creación-de-foros</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Creación-de-foros">Ver</a>
                                        </td>
                                    </tr>


                                     <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> URLs-Amigables</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/URLs-Amigables">Ver</a>
                                        </td>
                                    </tr>
                                        
                                    
                                    
                                </tbody>
                                <!-- Table body -->
                            </table>
                            <!-- Table  -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->


<script src="https://unpkg.com/vue"></script>

<script >
    var app = new Vue({
  el: '#uuuu',
  data: {
    unidad4: false
  }
})
</script>            