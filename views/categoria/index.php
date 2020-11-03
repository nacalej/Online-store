   <!-- VISTA DE CATEGORÍAS: -->
<h1>Gestionar categorías</h1>

<a href="<?=base_url?>categoria/crear" class="button-small">
   <i class="descrip fas fa-edit" title="Crear categoría"></i>   	
</a>

<?php if (isset($_SESSION['categoria']) && $_SESSION['categoria'] == "Complete") : ?>
	<div class="alert_green">¡La categoría se ha añadido!</div><br>
<?php elseif(isset($_SESSION['categoria']) && $_SESSION['categoria'] == "Failed") :?>	
	<div class="alert_red">¡La categoría no se ha añadido!</div><br>

<?php endif; ?> 
<?php Utils::deleteSession('categoria'); ?> 

<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
  </tr>

   <!-- BUCLE PARA OBTENER LOS REGISTROS: -->
<!-- $categorias, variable en el CategoriaController: -->
<?php  while($cat = $categorias->fetch_object()) : ?>
	<!-- En cada iteración, se crea una variable categoría -->
	<tr>
		<td><?=$cat->id;?></td>
		<td><?=$cat->nombre;?></td>
  </tr>

<?php endwhile;?>
</table>