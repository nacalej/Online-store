<?php if (isset($edit) && isset($pro) && is_object($pro)): ?>
<!-- MOSTRAR EL PRODUCTO A EDITAR: -->
	<h1>Editar producto: <?=$pro->nombre?></h1>
<?php $url_action = base_url."producto/save&id= ".$pro->id; ?>

<?php else: ?>
<h1>Crear nuevo producto</h1>
<?php $url_action = base_url."producto/save"; ?>
<?php endif;?>
<!-- RELLENAR EL FORMULARIO CON LOS DATOS DEL PRODUCTO A EDITAR, MÉTODO getOne PRODUCTOMODEL -->


<div class="form_container">

<!-- PARA GUARDAR LA IMAGEN: enctype permite enviar ficheros en el formulario -->
<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
	<!-- REUTILIZAR EL FORMULARIO DE CREACIÓN, PARA EDICIÓN DE PRODUCTOS -->
	<label for="nombre">Nombre </label>
	<!-- Si existe $pro, y si es objeto, entonces mostrar el nombre y si no, no mostrar nada dentro del value-->
	<input type="text" name="nombre" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>">

	<label for="descripcion">Descripción </label>
	<textarea name="descripcion"><?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?> </textarea>

	<label for="precio">Precio </label>
	<input type="text" name="precio" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>">

	<label for="stock">Stock</label>
	<input type="number" name="stock" value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>">


	<label for="categoria">Categoría</label>
	<!-- MOSTRAR TODAS LAS CATEGORÍAS  REGISTRADAS -->
	<?php $categorias = Utils::showCategorias(); ?>
	<select name="categoria" > 

	  <!-- Crear una variable cat, por cada iteración a la variable categorías: -->
	  <?php while($cat = $categorias->fetch_object()): ?>
	  	<!-- El value es el id de la categoría, para enviarlo al
	  	controlador, y que reciba el valor que debe guardar en 
	  	la bd -->
	  <option value="<?=$cat->id?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
	  	<?=$cat->nombre?> 
	  </option>
      <?php endwhile; ?>		
	</select>

	<label for="imagen">Imagen</label>
	<!-- MOSTRAR IMAGEN EN CASO DE EDITAR -->
	<?php if (isset($pro) && is_object($pro) && !empty($pro->imagen)) : ?>
	<!-- Mostrar el nombre de la imagen -->
	<img src="<?=base_url?>/uploads/images/<?=$pro->imagen?>" class = "thumb">
		
	<?php endif; ?>
	<input type="file" name="imagen" >
	<input type="submit" value="Guardar">
</form>
</div>