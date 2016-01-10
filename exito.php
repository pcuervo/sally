



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sally</title>
		<!-- Sets initial viewport load and disables zooming -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- SEO -->
		<meta name="keywords" content="">
		<meta name="description" content="">
		<!-- Compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">
		<!-- Favicon - generated with http://www.favicomatic.com/ -->
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="favicon/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="favicon/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="Little Crow"/>
		<meta name="msapplication-TileColor" content="#009C9F" />
		<meta name="msapplication-TileImage" content="favicon/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="favicon/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="favicon/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="favicon/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="favicon/mstile-310x310.png" />
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- Google font(s) -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
		<!-- Font awesome -->
		<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

		<!-- Typekit -->
		<script src="https://use.typekit.net/lus4pyy.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
	</head>
	<body class="[ bg-primary ][ color-light ]">
		<header class="[ container ]">
			<a href="index.html">
				<img class="[ logo ]" src="img/logo.jpg">
			</a>
			<div class="[ return ]">
				<a href="grabando2.html">
					<img class="[ svg icon--stroke icon--iconed icon--thickness-3 ][ color-light ]"  src="icons/atras.svg">
					<p class="[ fz-xsmall ]">atrás</p>
				</a>
			</div>

		</header>
		<section class="[ container ]">
			<div class="[ margin-bottom ][ text-center ]">
				<div class="[ margin-top--large ][ visible-xs ]"></div>
				<img class="[ img-responsive img-title ]" src="img/title-1.png">
				<div class="[ row ][ margin-top ]">
					<div class="[ col-sm-4 col-sm-offset-4 ][ padding-movil ]">
						<div class="[ ico-small ][ margin-auto margin-bottom ]">
							<img class="[ img-responsive ]" src="img/maquillaje.png">
						</div>
						<p class="[ text-uppercase ]"><strong>¡Listo!</strong></p>
						<p>Casi acabamos, solo llena el siguiente formulario para ver el resultado</p>
					</div>
				</div>
			</div>
			<div class="[ form-tutorial ][ col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 ][ color-light ][ margin-bottom--large ]">
				
				<form id="myForm" method="post">
				<label class="[ text-uppercase ][ fz-small ][ letter-spacing--small ] ">Nombre</label>
				<input id="name" class="[ form-control ][ margin-bottom ]" name="name">
				<input id="video_uuid" type="hidden" name="video_uuid">
				<label class="[ text-uppercase ][ fz-small ][ letter-spacing--small ] ">Título del tutorial</label>
				<input id="title" class="[ form-control ][ margin-bottom ]" name="title">
				<label class="[ text-uppercase ][ fz-small ][ letter-spacing--small ] ">Resume tu tutorial en tres frases:</label>
					<div class="[ input-group ][ margin-bottom ]">
						<span class="[ input-group-addon ]">1</span>
						<input id="frase1" type="text" class="[ form-control ]" name="frase1">
					</div>
					<div class="[ input-group ][ margin-bottom ]">
						<span class="[ input-group-addon ]">2</span>
						<input id="frase2" type="text" class="[ form-control ]" name="frase2">
					</div>
					<div class="[ input-group ][ margin-bottom ]">
						<span class="[ input-group-addon ]">3</span>
						<input id="frase3" type="text" class="[ form-control ]" name="frase3">
					</div>
					<label class="[ text-uppercase ][ fz-small ][ letter-spacing--small ] ">Categoría</label>
					<select id="category" class="[ form-control select-categorias ] " name="category" >
						<option>Ojos</option>
						<option>Cabello</option>
						<option>Uñas</option>
						<option>Labios</option>
					</select>

					<div class="[ col-xs-12 ][ margin-bottom--xlarge ][ text-center ]">
						<!--<input type="submit" value="Continuar">-->
						<a href="#" class="[ btn btn-primary ] " onclick="$(this).closest('form').submit()">Continuar</a>
						<!--<a href="vobo.html" class="[ btn btn-primary ] ">Continuar</a>-->
					</div>


				</form>
			</div>

			
  
		</section>

		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/functions.js"></script>
		<script>
			$( document ).ready(function() {
				/**
				 * On ready
				**/
				imgToSvg();

				/**
				 * Triggered events
				**/

			});
		</script>
		<script type="text/javascript">

			function getCookie(cname) {
				    var name = cname + "=";
				    var ca = document.cookie.split(';');
				    for(var i=0; i<ca.length; i++) {
				        var c = ca[i];
				        while (c.charAt(0)==' ') c = c.substring(1);
				        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
				    }
				    return "";
				}
				var uuid = getCookie("uuid");
				$("#video_uuid").val(uuid);
				

				//add exception handler 

				var request;

				$("form").on('submit',function(e) {
        		
	        		var video_uuid = document.getElementById("video_uuid").value;	
	        		var name = document.getElementById("name").value;
					var title = document.getElementById("title").value;
					var frase1 = document.getElementById("frase1").value;
					var frase2 = document.getElementById("frase2").value;
					var frase3 = document.getElementById("frase3").value;
					var category = document.getElementById("category").value;

        				// Abort any pending request
					    if (request) {
					        request.abort();
					    }

					    // setup some local variables
					    var $form = $("#myForm");

					    // Let's select and cache all the fields
					    var $inputs = $form.find("input, select, button, textarea");

					    var postData = $("#myForm").serialize();

					    console.log(postData);
					    
					    e.preventDefault();

        		});

		</script>
	</body>
</html>

