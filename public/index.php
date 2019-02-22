<?php require '../bootstrap.php'; ?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs ================================================== -->
   <meta charset="utf-8">
	<title>Oops!</title>
	<meta name="description" content="Página de acesso bloqueado">
	<meta name="author" content="Thiago Marquesini">

   <!-- mobile specific metas ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS ================================================== -->
   <link rel="stylesheet" href="<?=base_url()?>css/base.css">
   <link rel="stylesheet" href="<?=base_url()?>css/main.css">
   <link rel="stylesheet" href="<?=base_url()?>css/vendor.css">

   <!-- script ================================================== -->
	<script src="<?=base_url()?>js/modernizr.js"></script>

</head>

<body>

    <!-- main header ================================================== -->
    <header class="main-header">
   	<div class="row">
   		<div class="logo">
	         <a href="#">Proxy</a>
	      </div>
   	</div>
   </header>

	<!-- main content ================================================== -->
   <main id="main-404-content" class="main-content-particle-js">

   	<div class="content-wrap">

		   <div class="shadow-overlay"></div>

		   <div class="main-content">
		   	<div class="row">
		   		<div class="col-twelve">
			  			<h1 class="kern-this">Oops!</h1>
			  			<p>
                            O site que você estava tentando acessar foi bloqueado.
                            Se você acredita que houve algum engano neste bloqueio
						    entre em contato com o Suporte de TI de sua unidade.
			  			</p>

			  			<div class="search">
				      	    <form action="https://google.com.br/search">
								<input type="text" id="q" name="q" class="search-field" placeholder="Pesquise o que deseja aqui …" autofocus="">
							</form>
				      </div>

			   	</div> <!-- /twelve -->
		   	</div> <!-- /row -->
		   </div> <!-- /main-content -->

		   <footer>
		   	<div class="row">

		  		<div class="col-five tab-full bottom-links">
			   		<div class="credits">
				   		<p>Serviços de rede por <a href="https://marquesini.com.br/" title="Thiago Marquesini">Thiago Marquesini</a></p>
				   	</div>
			   	</div>

		   	</div> <!-- /row -->
		   </footer>

		</div> <!-- /content-wrap -->

   </main> <!-- /main-404-content -->

   <div id="preloader">
    	<div id="loader"></div>
   </div>

   <!-- Java Script ================================================== -->
   <script src="<?=base_url()?>js/jquery-2.1.3.min.js"></script>
   <script src="<?=base_url()?>js/plugins.js"></script>
   <script src="<?=base_url()?>js/main.js"></script>

</body>

</html>