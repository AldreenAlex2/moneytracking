<script>
	function confirmarEliminacion($id)
	{
		eliminar = confirm("¿Deseas eliminar este registro?");
		if (eliminar)
			window.location.href = "<?php echo APP_URL.'/types/delete/';?>"+$id;
		else
			alert("Eliminación cancelada");
	}
</script>

<div class="row">
<div class="col-med-6 col-sm-12 col-xs-12">
	<h4>Users type list</h4>
	<a href="<?php echo APP_URL.'/types/add/'; ?>">Add</a>
	<div class="table-responsive">
	<table class="table table-bordered" border="1">
		<caption>
			<h4>Total of registers: <?php echo $typesCount; ?></h4>
		</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if (!empty($types)) {
			foreach ($types as $type): 
		?>
		<tr>
			<th><?php echo $type["types"]["id"]; ?></th>
			<td><?php echo $type["types"]["name"]; ?></td>
			<td>
				<?php echo $this->Html->link("Edit", array(
					"controller"=>"types", 
					"method"=>"edit", 
					"arg" => $type["types"]["id"]
				)); ?>
				<button onclick="confirmarEliminacion(<?php echo $type['types']['id']; ?>);">
					Delete
				</button>
			</td>
		</tr>
		<?php 
			endforeach;
		}
		?>
		</tbody>
	</table>
</div>