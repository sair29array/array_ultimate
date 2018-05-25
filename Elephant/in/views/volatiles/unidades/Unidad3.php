
             <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div id="uuu" class="card-body">

                            <!-- Table  -->
                            <table class="table  ">

                                 <h4 v-show="!unidad3" style="cursor: pointer;" @click="unidad3 = true">3. Programación Orientada a objetos con php <i v-show="!unidad3" class="fa fa-caret-right mt-auto"></i><i v-show="unidad3" class="fa fa-caret-down mt-auto"></i></h4>

                                <h4 v-show="unidad3" style="cursor: pointer;" @click="unidad3 = false">3. Programación Orientada a objetos con php <i v-show="!unidad3" class="fa fa-caret-right mt-auto"></i><i v-show="unidad3" class="fa fa-caret-down mt-auto"></i></h4>
                                <!-- Table body -->


                                
                               

                                <!-- Table body -->
                                <tbody v-show="unidad3">
                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Introducción a la POO</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Introducción-a-la-POO">Ver</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Clases y objetos</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Clases-y-objetos">Ver</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Instancias</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Instancias">Ver</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Herencia</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Herencia">Ver</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Cookie y Session</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Cookie-y-Session">Ver</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Session</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Session">Ver</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Cookie</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Cookie">Ver</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Namespace</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Namespace">Ver</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Clases anonimas</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Clases-anonimas">Ver</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> CSPRNG y función intdiv</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/CSPRNG-y-función-intdiv">Ver</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-justify" > <h4 class="mb-2 mb-sm-0 pt-2"><i class="fa fa-film blue-text"></i> Serialize y unserialize</h4></td> 
                                        <td style="float: right;" >
                                            <a class="btn btn-primary" href="../in/Serialize-y-unserialize">Ver</a>
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
  el: '#uuu',
  data: {
    unidad3: false
  }
})
</script>