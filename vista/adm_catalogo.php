<?php 
session_start();
if ($_SESSION['us_tipo']==1||$_SESSION['us_tipo']==3){
	include_once 'layouts/header.php';
?>
	  <title>Adm|Catalogo</title>
	  <!-- Tell the browser to be responsive to screen width -->
		<?php 
			include_once 'layouts/nav.php';
		 ?>
	  <!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1>Ventas</h1>
	          </div>
	          <div class="col-sm-6">
	        <!--    <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Home</a></li>
	              <li class="breadcrumb-item active">Productos</li>
	            </ol>
				-->
	          </div>
	        </div>
	      </div><!-- /.container-fluid -->
	    </section>

	    <!-- Main content -->
		<section>
	    	<div class="container-fluid">
	    		<div class="card-success">
	    			<div class="card-header">
	    				<h3 class="card-title">Buscar producto</h3>
	    				<div class="input-group">
	    					<input type="text" id="buscar-producto" class="form-control float-left" placeholder="Ingrese el nombre de producto">
	    					<div class="input-group-append">
	    						<button class="btn btn-default">
	    							<i class="fas fa-search"></i>
	    						</button>
	    					</div>
	    				</div>
	    			</div>
	    				<div id="producto" class="row d-flex aling-items-strech">
	    			</div>
					<div class="card-body p-0 table-responsive">
	    										<table class="table table-hover text-nowrap">
	    											<thead class="table-success">
	    												<tr>	    													
	    													<th>codigo</th>	  		
	    													<th>stock</th>
															<th>Nombre</th>
															<th>precio</th>
															<th>mascota</th>
															<th>sabor</th>
															<th>empresa</th>
															<th>tipo</th>
															<th>embase</th>
															<th>Accion</th>
	    												</tr>
	    											</thead>
	    											<tbody  id="productos" class="table-active">	    												
	    											</tbody>
	    										</table>
	    									</div>

	    			<div class="card-footer">
	    				
	    			</div>
	    		</div>
	    	</div>
	    </section>   
	 <!--   <section>
	    	<div class="container-fluid">
	    		<div class="card-blue">
	    			<div class="card-header">
	    				<h3 class="card-title">Lotes en riesgo</h3>	    				
	    			</div>
	    			<div class="card-body p-0 table-responsive">
	    				<table class="table table-hover text-nowrap">
	    					<thead class="table-success">
	    						<tr>
	    							<th>Cod</th>
	    							<th>Producto</th>
	    							<th>Stock</th>		
	    							<th>Laboratorio</th>
	    							<th>Presentacion</th>
	    							<th>Proveedor</th>
	    							<th>Mes</th>
	    							<th>Dia</th>
	    						</tr>
	    					</thead>
	    					<tbody id="lotes" class="table-active">
	    						
	    					</tbody>
	    				</table>					    				
	    			</div>
	    			<div class="card-footer">
	    				
	    			</div>
	    		</div>
	    	</div>
	    </section>    	   
	   	 	   
	     /.content -->
	  </div>
	  <!-- /.content-wrapper -->

	  
<?php 
	include_once 'layouts/footer.php';
}
else{
header('Location:../index.php');
}

 ?>
 <script src="../js/Catalogo.js"></script>
 
 <script src="../js/Carrito.js"></script>
