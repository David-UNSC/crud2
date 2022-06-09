<header>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">
		<link href='css/letras.css' rel='stylesheet' type='text/css'>
		<link href='css/italic.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css" type="text/css">










<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ">
				<div class="navbar-header">
					    <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target="#myNavbar">
					        <span class="glyphicon glyphicon-align-justify"></span>
					    </button>
      					<a class="navbar-brand logo" href="#"><h1 class="text-center ">CRUD EN PHP</h1></a>
    			</div>
			</div>
			<div class="col-md-4">
				<nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
					<ul class="nav navbar-nav navbar-right menu">
							<li><a href="productos.php" class="page-scroll active">Productos</a></li>
							<li><a href="buscarp.php" class="page-scroll active" data-toggle="modal" data-target="#myModal">Buscador</a></li>
							<li><a href="fabricantes.php" class="page-scroll active"> Fabricantes</a></li>
	
					</ul>
				</nav>
			</div>
		</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">


<div class="row">
<div class="col-md-3 " id="menulogin">
 <br/>
                              <?php
  include("login/login.php");



  ?>
  <div class="text-box">

          <form role="form" method="POST"  action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                        <div class="form-group">

                            <input type="text" class="form-control form-effect" name="usuario" placeholder="Usuario">
                        </div>
                    
                        <div class="form-group">

                            <input type="password" class="form-control form-effect" name="pass" placeholder="Pasword">
                        </div>  
                         <button type="submit" class="btn btn-default btn-sub" name="login">Login</button>

                    </form>

                    <br/>
                      

        
          </div>
</div>

</div>
   
   
  </div>
	</div>
