<?php
   include("connection.php");
   $Id = trim($_REQUEST['id']); 
    $rs = mysql_query("SELECT * FROM  cliente where id=$Id");
    $edt = mysql_fetch_array($rs);
 
?>

<!DOCTYPE html>
<html lang="br">
<html class="no-js"> 
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> customPC </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/icomoon-social.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/validator.min.js"></script>
    <link rel="stylesheet" href="css/leaflet.css" />
    <link rel="stylesheet" href="css/main.css">

    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
      

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
				<div class="container">
					<div class="menuextras">
						<div class="extras">
							<ul>
								<li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="page-shopping-cart.html"><b>3 items</b></a></li>
								<li>
									<div class="dropdown choose-country">
										<a class="#" data-toggle="dropdown" href="#"><img src="img/flags/br.png" alt="Brazil"> BR</a>
										<ul class="dropdown-menu" role="menu">
											<li role="menuitem"><a href="#"><img src="img/flags/us.png" alt="United States"> US</a></li>
											<li role="menuitem"><a href="#"><img src="img/flags/de.png" alt="Germany"> DE</a></li>
											<li role="menuitem"><a href="#"><img src="img/flags/es.png" alt="Spain"> ES</a></li>
										</ul>
									</div>
								</li>
								<li><a href="login.html">Login</a></li>
							</ul>
						</div>
					</div>
					<nav id="mainmenu" class="mainmenu">
						<ul>
							<li class="logo-wrapper"><a href="index.html"><img src="img/customPC.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
							<li>
								<a href="index.html">Home</a>
							</li>
							
							<li class="has-submenu active">
								<a href="#">Categorias</a>
								<div class="mainmenu-submenu">
									<div class="mainmenu-submenu-inner"> 
										<div>
											<h4>Pc Gamer</h4>
											<ul>
												<li><a href="index.html">PhenixI</a></li>
												<li><a href="">PhenixII</a></li>
												<li><a href="page-homepage-sample.html">Monster</a></li>
												<li><a href="">Pegasus </a></li>
												<li><a href="">Predador </a></li>
	
											</ul>
											<h4>Gabinetes</h4>
											<ul>
												<li><a href="page-services-1-column.html">Multilaser Warrior</a></li>
												<li><a href="page-services-3-columns.html">Xtrike Gaming Blizzard G7 </a></li>
												<li><a href="page-services-4-columns.html">Bg-017 Bluecase Suporta </a></li>
												<li><a href="page-pricing.html">Core P90 Vidro Temperado Thermaltake</a></li>
											</ul>
											<h4>Placa Mãe</h4>
											<ul>
													<h4>Azus</h4>
													<ul>
															<li><a href="page-team.html">Our Team</a></li>
															<li><a href="page-vacancies.html">Open Vacancies (List)</a></li>
															<li><a href="page-job-details.html">Open Vacancies (Job Details)</a></li>
													</ul>
													<h4>Gigabit</h4>
													<ul>
													<li><a href="page-team.html">Our Team</a></li>
													<li><a href="page-vacancies.html">Open Vacancies (List)</a></li>
													<li><a href="page-job-details.html">Open Vacancies (Job Details)</a></li>
												
													</ul>
													</ul>
										<h4>Processador</h4>
											<ul>
												<h4>Intel</h4>
												<ul>
														<li><a href="page-team.html">Our Team</a></li>
														<li><a href="page-vacancies.html">Open Vacancies (List)</a></li>
														<li><a href="page-job-details.html">Open Vacancies (Job Details)</a></li>
												</ul>
												<h4>AMD</h4>
												<ul>
												<li><a href="page-team.html">Our Team</a></li>
												<li><a href="page-vacancies.html">Open Vacancies (List)</a></li>
												<li><a href="page-job-details.html">Open Vacancies (Job Details)</a></li>
											
												</ul>
												</ul>
												<h4>Placa de video</h4>
											<ul>
												<li><a href="page-about-us.html">About Us</a></li>
												<li><a href="page-contact-us.html">Contact Us</a></li>
												<li><a href="page-faq.html">Frequently Asked Questions</a></li>
												<li><a href="page-testimonials-clients.html">Testimonials & Clients</a></li>
												<li><a href="page-events.html">Events</a></li>
												<li><a href="page-404.html">404 Page</a></li>
											
											</ul>								
										</div>
										<div>
											<h4>HD</h4>
											<ul>
												<li><a href="page-products-3-columns.html">Products listing (3 Columns)</a></li>
												<li><a href="page-products-4-columns.html">Products listing (4 Columns)</a></li>
												<li><a href="page-products-slider.html">Products Slider</a></li>
												<li><a href="page-product-details.html">Product Details</a></li>
												<li><a href="page-shopping-cart.html">Shopping Cart</a></li>
											</ul>
											<h4>Memorias</h4>
											<ul>
												<li><a href="page-blog-posts.html">Blog Posts (List)</a></li>
												<li><a href="page-blog-post-right-sidebar.html">Blog Single Post (Right Sidebar)</a></li>
												<li><a href="page-blog-post-left-sidebar.html">Blog Single Post (Left Sidebar)</a></li>
												<li><a href="page-news.html">Latest & Featured News</a></li>
											</ul>
											<h4>Fonte Real</h4>
											<ul>
												<li><a href="page-products-3-columns.html">Products listing (3 Columns)</a></li>
												<li><a href="page-products-4-columns.html">Products listing (4 Columns)</a></li>
												<li><a href="page-products-slider.html">Products Slider</a></li>
												<li><a href="page-product-details.html">Product Details</a></li>
												<li><a href="page-shopping-cart.html">Shopping Cart</a></li>
											</ul>
										</div>
										<div>
											<h4>Water cooler</h4>
											<ul>
												<li><a href="page-blog-posts.html">Blog Posts (List)</a></li>
												<li><a href="page-blog-post-right-sidebar.html">Blog Single Post (Right Sidebar)</a></li>
												<li><a href="page-blog-post-left-sidebar.html">Blog Single Post (Left Sidebar)</a></li>
												<li><a href="page-news.html">Latest & Featured News</a></li>
											</ul>
										</div>
	
										
									</div><!-- /mainmenu-submenu-inner -->
								</div><!-- /mainmenu-submenu -->
							</li>
							<li>
								<a href="credits.html">Creditos</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>    
                        
            <!--Form Edita Cliente-->

            <div class="row">
        
        <div class="col-md-12">
        <h1 class="text-center alert alert-dark">Editar Cliente</h1>
        
        <form class="bg-white" style="padding:20px;" id="frmEdtCliente" name="frmEdtCliente" method="POST" action="edtCliente.php">
            <div class="form-group">
            <label for="lblId"><b> ID:  </b> <?php echo $edt['id'] ?></label>
            <input type="hidden" id="Id" name="txtId" value="<?php echo $edt['id'] ?>">
        </div>
        <div class="form-group">
            <label for="lblNome"><b> NOME </b></label>
            <input type="text" id="Nome" name="txtNome" class="form-control col-md-10" value="<?php echo $edt['nome'] ?>">
        </div>
        <div class="form-group">
            <label for="lblEndereco"><b> ENDEREÇO </b></label>
            <input type="text" id="Endereco" name="txtEndereco" class="form-control col-md-10" value="<?php echo $edt['endereco'] ?>">
        </div>
        <div class="form-group">
            <label for="lblCidade"><b> CIDADE </b></label>
            <input type="text" id="Cidade" name="txtCidade" class="form-control col-md-10" value="<?php echo $edt['cidade'] ?>">
        </div>
        <div class="form-group">
            <label for="lblEmail"><b> EMAIL </b></label>
            <input type="text" id="Email" name="txtEmail" class="form-control col-md-10" value="<?php echo $edt['email'] ?>">
        </div>

        <input type="submit" id="btnAtualizar" name="btnAtualizar" class="btn btn-primary btn-lg" value="Atualizar">
        <input type="reset" id="btnLimpar" name="btnLimpar" class="btn btn-sm" value="Limpar">
        <input type="button" id="btnVoltar" name="btnVoltar" class="btn btn-sm" value="Voltar" 
        onclick="javascript:location.href='listaCliente.php'">
    

    </form>
			 <!--Fim Edita Cliente-->	
			 		
<!-- nossos clientes-->
	    <div class="section">
	    	<div class="container">
	    		<h2>Our Clients</h2>
				<div class="clients-logo-wrapper text-center row">
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/canon.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/cisco.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/dell.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/ea.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/ebay.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/facebook.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/google.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/hp.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/microsoft.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/mysql.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/sony.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/yahoo.png" alt="Client Name"></a></div>
				</div>
			</div>
	    </div>
	    <!-- End Our Clients -->

	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Our Latest Work</h3>
		    			<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-portfolio-item.html"><img src="img/Pcuston.jpg" alt="Project Name"></a>
							</div>
						</div>
		    		</div>
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Navigate</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="page-blog-posts.html">Blog</a></li>
		    				<li><a href="page-portfolio-3-columns-2.html">Portfolio</a></li>
		    				<li><a href="page-products-3-columns.html">eShop</a></li>
		    				<li><a href="page-services-3-columns.html">Services</a></li>
		    				<li><a href="page-pricing.html">Pricing</a></li>
		    				<li><a href="page-faq.html">FAQ</a></li>
		    			</ul>
		    		</div>
		    		
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contacts</h3>
		    			<p class="contact-us-details">
	        				<b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
	        				<b>Phone:</b> +44 123 654321<br/>
	        				<b>Fax:</b> +44 123 654321<br/>
	        				<b>Email:</b> <a href="Rafaloiro29@hotmail.com">Rafaloiro29@hotmail.com</a>
	        			</p>
		    		</div>
		    		<div class="col-footer col-md-2 col-xs-6">
		    			<h3>Stay Connected</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="#" class="facebook"></a></li>
		    				<li><a href="#" class="twitter"></a></li>
		    				<li><a href="#" class="googleplus"></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2013 mPurpose. All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>

</body>

</html>