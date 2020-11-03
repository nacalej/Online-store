<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="../icon/store2.png">
	<title>Tienda</title>
	<link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
    <script src="../js/all.min.js"></script>
	  
	<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
</head>
<body>
    <!-- BEGIN OF HEADER-->
	<header id="header">

		<div id="logo">
			<!-- BASE URL -->
			<img src="<?=base_url?>assets/img/blueb.png" alt="Logo Blueberry" />
			<a href="index.php" class="mora">
				Blueberry 
			</a>
			
		</div>
		
	</header>
	<!-- END OF HEADER-->

	<!-- BEGIN OF MENU-->
	<?php $categorias = Utils::showCategorias();?>
	<nav id="menu">
		<ul>
			<li><a href="<?=base_url?>">Inicio</a></li>
			<!-- Crear una variable cat, por cada iteración a la variable categorías: -->
			<?php while($cat = $categorias->fetch_object()): ?>
				<!-- Función ver -> controller -->
			<li><a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a></li>
		    <?php endwhile; ?>
			
		</ul>
	</nav>
	<!-- END OF MENU-->

    <div id="content">