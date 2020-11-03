

<h1>Gestión de productos</h1>

<!-- LISTADOS DE PRODUCTOS -->
<a href="<?=base_url?>producto/crear" class="button-small ">
   <i class="descrip fas fa-edit" title="Crear producto"></i>   	
</a>

<?php if (isset($_SESSION['producto']) && $_SESSION['producto'] == "Complete") : ?>
	<div class="alert_green">¡El producto se ha añadido, o modificado exitosamente!</div><br>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] == "Failed") :?>	
	<div class="alert_red">¡El producto no se ha añadido o modificado!</div><br>

<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>

<!--       BORRAR PRODUCTO        -->

<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == "Complete") : ?>
	<div class="alert_green">¡El producto se ha eliminado!</div><br>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] == "Failed") :?>	
	<div class="alert_red">¡El producto no se ha eliminado!</div><br>

<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>





<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Stock</th>
		<th>Acciones</th>

    </tr>

   <!-- BUCLE PARA OBTENER LOS REGISTROS: -->
<!-- $categorias, variable en el CategoriaController: -->
<?php  while($prod = $productos->fetch_object()) : ?>
	<!-- En cada iteración, se crea una variable categoría -->
	<tr>
		<td><?=$prod->id;?></td>
		<td><?=$prod->nombre;?></td>
		<td><?=$prod->precio;?></td>
		<td><?=$prod->stock;?></td>
		<td>
					<!-- Controlador producto -->
					<!-- se usa el & para cuando no es el primer parámetro que se pasa por url -->
			<a href="<?=base_url?>producto/editar&id=<?=$prod->id?>" class="button acciones"><i class="far fa-edit" title="Editar"></i> </a>
			<!-- PASAR POR PARÁMETRO GET EL PRODUCTO A ELIMINAR: -->
			<a href="<?=base_url?>producto/eliminar&id=<?=$prod->id?>" class="button acciones"><i class="fas fa-trash-alt"></i> </a>

		</td>
    </tr>
<?php endwhile;?>
</table>