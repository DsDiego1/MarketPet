  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/compra.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/datatables.css">

<!-- select2 -->
	  <link rel="stylesheet" href="../css/select2.css">
 <!-- SweetAlert2 -->
	  <link rel="stylesheet" href="../css/sweetalert2.css">

	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="../css/css/all.min.css">
	  <!-- Ionicons -->
	  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	  <!-- overlayScrollbars -->
	  <link rel="stylesheet" href="../css/adminlte.min.css">
	  <!-- Google Font: Source Sans Pro -->
	  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	</head>
	<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
	  <!-- Navbar -->
	  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
	    <!-- Left navbar links -->
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
	      </li>
	 <!--     <li class="nav-item d-none d-sm-inline-block">
	        <a href="../vista/adm_catalogo.php" class="nav-link">Home</a>
	      </li>
	      <li class="nav-item d-none d-sm-inline-block">
	        <a href="#" class="nav-link">Contact</a>
	      </li> -->
	    <!--   <li id="cat-carrito" style="display: none" class="nav-item dropdown"> -->
     <!--   <img src="../img/carrito.png" class="imagen-carrito nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
		
          <span id="contador" class="contador badge badge-danger"></span>
        </img>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <table class="carro table table-hover text-nowrap p-0">
          	<thead class="table-success">
          		<tr>
          			<th>Codigo</th>
          			<th>Nombre</th>
          			<th>Concentracion</th>
          			<th>Adicional</th>
          			<th>Precio</th>
          			<th>Eliminar</th>
          		</tr>
          	</thead>
          	<tbody id="lista">
          		
          	</tbody>
          </table>
          <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar Venta</a>
          <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
        </div>
      </li>	    
	    </ul>

	    <!-- SEARCH FORM 
	    <form class="form-inline ml-3">
	      <div class="input-group input-group-sm">
	        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
	        
	        </div><div class="input-group-append">
	          <button class="btn btn-navbar" type="submit">
	            <i class="fas fa-search"></i>
	          </button>
	      </div>
	    </form>-->

	    <!-- Right navbar links -->
		
	    <ul class="navbar-nav ml-auto">
		<a href="#" id="procesar-pedido" class="btn btn-sm btn-primary">Procesar Venta</a>
	     	     	
	    </ul>
	  </nav>
	  <!-- /.navbar -->

	  <!-- Main Sidebar Container -->
	  <aside class="main-sidebar sidebar-dark-primary elevation-4">
	    <!-- Brand Logo -->
	    <a href="../vista/adm_catalogo.php" class="brand-link">
	      <img src="../img/2.png"
	           alt="AdminLTE Logo"
	           class="brand-image img-circle elevation-2"
	           >
	      <span class="brand-text font-weight-light">.</span>
	    </a>

	    <!-- Sidebar -->
	    <div class="sidebar">
	      <!-- Sidebar user (optional)
		user-panel mt-3 pb-3 mb-3 d-flex -->
	      <div class="">
	        <div class="image">
	          <img id="avatar4" src="../img/41.png" class="img-circle elevation-2" alt="User Image">
	        </div>
	        <div class="info">
	          <a href="#" class="d-block">
	          	<?php 
	          		echo $_SESSION['nombre_us'];
	          	 ?>
	          </a>
	        </div>
	      </div>

	      <!-- Sidebar Menu -->
	      <nav class="mt-2">
	        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
	          <!-- Add icons to the links using the .nav-icon class
	               with font-awesome or any other icon font library -->
	          <li class="nav-header">DATOS PERSONALES</li>         
	          <li class="nav-item">
	            <a href="editar_datos_personales.php" class="nav-link">
	              
	              <p>
	                Datos Personales
	              </p>
	            </a>
	          </li>         
	     <!--     <li class="nav-item">
	            <a href="adm_usuario.php" class="nav-link">
	              
	              <p>
	                Gestion Usuario
	              </p>
				  
	            </a>
	          
			  </li>-->        
			  <li class="nav-item">
	            <a href="../controlador/Logout.php" class="nav-link"class="cerra_sesion">
	            
	              <p>
	                   Salir Sesion
	              </p>
				  
	            </a>
	          
			  </li>  
	          <li class="nav-header">REGISTRO DE VENTAS</li>  
	               
	          <li class="nav-item">
	            <a href="adm_catalogo.php" class="nav-link">
	              
	              <p>
				  Realizar pedido
	              </p>
	            </a>
	          </li>     
			  <li class="nav-item">
	            <a href="adm_venta.php" class="nav-link">
	              
	              <p>
				  Reportes
	              </p>
	            </a>
	          </li> 
	          <li class="nav-item">
	            <a href="adm_producto.php" class="nav-link">
	             
	              <p>
	                 Producto
	              </p>
	            </a>
	          </li>      
<!--
	          <li class="nav-item">
	            <a href="adm_atributo.php" class="nav-link">
	              <i class="nav-icon fas fa-vials"></i>
	              <p>
	                Gestion Atributo
	              </p>
	            </a>
	          </li>  
	          <li class="nav-item">
	            <a href="adm_lote.php" class="nav-link">
	              <i class="nav-icon fas fa-cubes"></i>
	              <p>
	                Gestion Lote
	              </p>
	            </a>
	          </li>  	          
	           <li class="nav-item">
	            <a href="adm_proveedor.php" class="nav-link">
	              <i class="nav-icon fas fa-truck"></i>
	              <p>
	                Gestion Proveedor
	              </p>
	            </a>
	          </li>                         	         
	          
	        </ul>
	      </nav>
	       /.sidebar-menu -->
	    </div>
	    <!-- /.sidebar -->
	  </aside>
