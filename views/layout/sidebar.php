<!--BEGIN OF ASIDE-->

	<aside id="lateral">
	    <div id="carrito" class="block_aside">
	<?php if(isset($_SESSION['identity'])): ?>
	    	<h3>Mi carrito</h3>
	    	<ul>
	    		<!-- Obtener lo que devuelve la función: -->
	    		<?php $stats = Utils::statsCarrito(); ?>
	    		<!-- Total de products en el carrito:m -->
	    		<li><a href="<?=base_url?>carrito/index">Productos: (<?=$stats['count']?>)</a></li>
	    		<!-- Se utiliza la función statsCarrito para imprimir el conteo de productos -->

	    		<!-- Total acumulado en compra: -->
	    		<li><a href="<?=base_url?>carrito/index">Total compra: (<?=$stats['total']?>)$</a></li>


	    		<li><a href="<?=base_url?>carrito/index">Ver el carrito</a></li>

	    	</ul>
	<?php endif; ?>
	    </div>


		<div id="login" class="block_aside">
			<br>
			<!-- Validación de login de usuario -->
			<!-- Si no existe el usuario identificado: -->
			<?php if(!isset($_SESSION['identity'])): ?>
			<h3>ACCEDER</h3>
			<br>
			                         <!--action-> nombre del controlador, y nombre del método:  -->
			<form action="<?=base_url?>Usuario/login" method="POST">
				<label for="email">Email</label>
				<input type="email" name="email">
				<label for="password">Password</label>
				<input type="password" name="password">
				<input type="submit" value="Enviar">
			</form>

			<!-- Si existe el usuario identificado, mostrar el nombre del usuario: -->
			
		<?php else: ?>
			<h3><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
		<?php endif; ?>
			<?php if(isset($_SESSION['admin'])): ?>
			<ul>
			<li><a href="<?=base_url?>categoria/index">Gestionar categorías</a></li>
			
			<li><a href="<?=base_url?>Producto/gestion">Gestionar productos</a></li>
			
			<li><a href="<?=base_url?>pedido/gestion">Gestionar pedidos</a></li>
			
		<?php endif; ?>
		<?php if(isset($_SESSION['identity'])): ?>
			<li><a href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a></li>
			
			<li><a href="<?=base_url?>Usuario/logout">Cerrar sesión</a></li>
		<?php else: ?>
			<br>
		<!-- ENLACE PARA REGISTRARSE: -->
		<li><a href="<?=base_url?>Usuario/registro">Regístrate</a></li>
		<?php endif; ?>
        	</ul>			
		</div>
		
	</aside>
	<!-- END OF ASIDE-->

	<!--BEGIN OF CENTRAL CONTENT-->
	<div id="central">