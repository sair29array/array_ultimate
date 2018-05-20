<?php  ?>
<div class="row text-center">
    <div class="col-12  col-md-6 col-lg-8 align-self-center">
        <h3 class="h3-responsive">Facturación</h3>                    
    </div>
    <div class="col-12 col-md-6 col-lg-4 align-self-center mt-2 mb-4">
    <a @click = "ver_herramientas = true" class="badge btn red text-white">Volver</a>
    </div>
</div>

<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">RECIBOS DE PAGO PENDIENTES</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">SERVICIOS</a>
    </li>
     <!--li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">PRODUCTOS</a>
    </li-->
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel4" role="tab">HISTORIAL DE PAGO</a>
    </li>
</ul>
<!-- Tab panels -->
<div class="tab-content card">
    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
        <br>
        <?php include("facturacion/RecibosPendientesPago.php"); ?>
    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade" id="panel2" role="tabpanel">
        <br>
       <?php include("facturacion/Servicios.php"); ?>
    </div>
    <!--/.Panel 2-->
     <!--Panel 3-->
    <div class="tab-pane fade" id="panel3" role="tabpanel">
        <br>
        <?php include("facturacion/Productos.php"); ?>
    </div>
    <!--/.Panel 3-->
    <!--Panel 4-->
    <div class="tab-pane fade" id="panel4" role="tabpanel">
        <br>
       <?php include("facturacion/HistorialPago.php"); ?>
    </div>
    <!--/.Panel 4-->
</div>