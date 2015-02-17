<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Krzysztof Niemiec">
	    <title>Krzysztof Niemiec</title>
	
	    <!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
	
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->		
	
	</head>
	<body>
	   <!-- __________START_Header + NavBar_________________________ -->
		<?php
		require_once 'templates/header.php';
		?>
       <!-- __________END_Header + NavBar___________________________ -->
	   <!-- __________START_Main_Content____________________________ -->
<div class="container marginMainContent">
	<div class="row">
		<div class="col-md-2">
			
		</div>  
		<div class="col-md-8">
			<div class="row">
				
				<div class="col-md-7 text-center">
					<h1 class="text-center text-shadow">Krzysztof Niemiec</h1>
					<small class="cv">curriculum vitae</small>
				</div>
				<div class="col-md-5 text-center">
					<img src="img/cv_foto.png" alt="" class="img-thumbnail myPhoto">			
				</div>
				
			</div>
			<hr />
		<!-- ________________CONTENT LOADED via AJAX____________________ -->
			<div id="main_content"><!-- Main_Content loads here via AJAX --></div>
		</div> <!-- End of .col-8-md -->
        
		<div class="col-md-2">
			
		</div>        
	</div>
</div> 
	<!-- _____________END_Main_Content____________________________ -->
    <!-- ___________________START_Contact_________________________ -->
	  <?php 
		require_once 'templates/contact-form.php';
	  ?>
    <!-- ___________________END_Contact___________________________ -->
	<!-- ___________________START_Footer__________________________ -->
	  <?php 
		require_once 'templates/footer.php';
	  ?>
	<!-- ___________________END_Footer__________________________ -->
	
         
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- Include nav.js script -->
	    <script type="text/javascript" src="js/nav.js"></script>
	  
	</body>
</html>