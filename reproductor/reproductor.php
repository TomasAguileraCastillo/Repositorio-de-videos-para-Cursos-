<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">	
	
	<link href="https://vjs.zencdn.net/7.2/video-js.min.css" rel="stylesheet"> 	<script src="https://vjs.zencdn.net/7.2/video.min.js"></script>

	<link rel="stylesheet" href="css/video-js.css">
	<script src="js/video.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Reproductor CAMPVS Virtual - HEP</title>
</head>
<script>
window.oncontextmenu = function() {
return false;
} </script>
<body>
	
	<header>
		<h1 class="titulo">Contenidos Campvs Virtual - HEP</h1>
	</header>

	<main>
		<div class="contenedor">
			<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}" controls id="fm-video">
			<source src="../modelos/<?php echo $_GET["saludo"]; ?> " type="video/mp4">
			</video>
	
			<article>
			
				<h2>Recuerde Repasar los contenidos, del curso</h2>
				<p>Este contenido estara disponible solo hasta la fecha de termino indicada, para este curso.</p><br />
				<p>si tiene alguna duda o problemas con la plataforma de reproduccion, favor contactar al equipo de UDO.</p>
			</article>

			<a href=""> Volver </a>

			
	
		</div>
	</main>

	<script>
		var reproductor = videojs('fm-video', {
			fluid: true
		});
	</script>
</body>
</html>