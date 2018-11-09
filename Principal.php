<?php
include("connection.php");
$rs = mysql_query("SELECT * FROM produto;");
?>

<!DOCTYPE html>

 <html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> customPC </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/icomoon-social.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/validator.min.js"></script>
    <link rel="stylesheet" href="css/leaflet.css" />
    <link rel="stylesheet" href="css/main.css">

	<link rel="stylesheet" href="dist/modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/modules/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
  
	<link rel="stylesheet" href="dist/modules/summernote/summernote-lite.css">
	<link rel="stylesheet" href="dist/modules/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="dist/css/demo.css">
	<link rel="stylesheet" href="dist/css/style.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



		<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		
		<style>
			
			.main-sidebar {

				position: relative;
				
				transition: 0.4s ease-in-out;

			}

			.btn-menu {
				position: absolute;
				right: 10px;
				top: 25px;
				transition: .6s ease;
			}

			.btn-menu:hover {
				transform: translateY(3px);
				background: rgba(60, 60 ,60, .1);
				color: #303037;	
			}


			#turn-menu-off:checked ~ #menu-lateral {
				opacity: 0;

			}

			#turn-menu-on:checked ~ #menu-lateral {
				opacity: 1;
			}

			input[name='turn-menu'] {
				display: none;
			}

		</style>


</head>
    <body>
        
			<input type="radio" name="turn-menu" id="turn-menu-off" checked>
			<input type="radio" name="turn-menu" id="turn-menu-on">  

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper ">
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
							<li>
								<a href="#" class="btn-menu"> <i class="fas fa-bars"></i> </a>
							</li>
						</ul>
					</nav>
				</div>
            </div>   
            
            
                        
			<!--inicio-->
			<div class="main-sidebar col-lg-3 col-md-6 col-12" id="menu-lateral">
				<aside id="sidebar-wrapper">
				  <div class="sidebar-brand">
					<a>customPC</a>
				  </div>
				  <div class="sidebar-user">
					<div class="sidebar-user-picture">
					  <img alt="image" src="dist/img/avatar/avatar-1.jpeg">
					</div>
					<div class="sidebar-user-details">
					  <div class="user-name">DarkVoid</div>
					  <div class="user-role">
						Administrator
					  </div>
					</div>
				  </div>
				  <ul class="sidebar-menu">
		
					<li>
					  <a href="listaCliente.php"><i class="ion ion-clipboard"></i><span>Lista cliente</span></a>
					</li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Components Pc</span></a>
              <ul class="menu-dropdown">
                <li><a href="general.html"><i class="ion ion-ios-circle-outline"></i> Placa Mãe</a></li>
                <li><a href="components.html"><i class="ion ion-ios-circle-outline"></i> Processador</a></li>
                <li><a href="buttons.html"><i class="ion ion-ios-circle-outline"></i> gabinetes</a></li>
								<li><a href="toastr.html"><i class="ion ion-ios-circle-outline"></i> Placa de video</a></li>
								<li><a href="toastr.html"><i class="ion ion-ios-circle-outline"></i> HD/SSD</a></li>
								<li><a href="toastr.html"><i class="ion ion-ios-circle-outline"></i> Water cooler</a></li>
              </ul>
            </li>
					<li>
					  <a href="chartjs.html"><i class="ion ion-stats-bars"></i><span>Chart.js</span></a>
					</li>
					<li>
					  <a href="simple.html"><i class="ion ion-ios-location-outline"></i><span>Google Maps</span></a>
					</li>
		
					
				  <div class="p-3 mt-4 mb-4">
					<a href="index.html" class="btn btn-danger btn-shadow btn-round has-icon has-icon-nofloat btn-block">
					  <i class="ion ion-help-buoy"></i> <div>Sair</div>
					</a>
				  </div>
				</aside>
			  </div>
				<!--termino-->
								
				<!--lista produto-->
				<div class="col-lg-5 col-md-12 col-12 col-sm-12">
						<div class="card">
							<div class="card-ringt">
								<div class="float-right">
                                <input type="button" id="bt_Add" name="bt_ADD" class="btn btn-primary " value="Adicionar" 
                                    onclick="javascript:location.href='frmInsProd.html'">
									<!--<a href="#" class="btn btn-primary">oi</a>-->
								</div>
								<h4>Produtos em Estoque</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
                        <th>ID</th>
												<th>Produto</th>
												<th>Quantidade</th>
												<th>Valor</th>
												<th colspan="2" class="text-center" >OPERAÇÕES</th>
											</tr>
										</thead>
                                        <?php while ($linha = mysql_fetch_array($rs)) {?>                   
										<tr>
                      <td><?php echo $linha['id'] ?></td>
                      <td><?php echo $linha['descricao'] ?></td>
                      <td><?php echo number_format ($linha['quantidade'],2,',','.') ?></td>
                      <td>R$<?php echo number_format ($linha['valor'],2,',','.') ?></td>
                      <td class="text-center">
                      <button  class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit" onclick="javascript: location.href='frmEdtProd.php?id=' +
                      <?php echo $linha['id'] ?>"><i class="ion ion-edit"></i></button>
                      <button  class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" onclick="javascript: location.href='frmRemProd.php?id=' +
                      <?php echo $linha['id'] ?>"><i class="ion ion-trash-b"></i></button>
                        </td> 
											</tr>
                        <?php } ?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
<!-- termino lista produto-->
                


				

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        


		<script src="dist/modules/jquery.min.js"></script>
  <script src="dist/modules/popper.js"></script>
  <script src="dist/modules/tooltip.js"></script>
  <script src="dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="dist/js/sa-functions.js"></script>
  
  <script src="dist/modules/chart.min.js"></script>
  <script src="dist/modules/summernote/summernote-lite.js"></script>

  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgb(87,75,144)',
        borderColor: 'rgb(87,75,144)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
  </script>
  <script src="dist/js/scripts.js"></script>
  <script src="dist/js/custom.js"></script>
	<script src="dist/js/demo.js"></script>
	
	<script>
			var btn_menu = document.querySelector(".btn-menu");
			var menu_lateral = document.querySelector("#menu-lateral");
			var turnOff = document.querySelector("#turn-menu-off");
			var turnOn = document.querySelector("#turn-menu-on");

			btn_menu.onclick = function () {

				if(turnOff.checked) {
					console.log("is checked!");
					turnOff.checked = false;
					turnOn.checked = true;

				} else {
					console.log("not checked.");
					turnOff.checked = true;
					turnOn.checked = false;
				}

			}

		</script>
    </body>
</html>