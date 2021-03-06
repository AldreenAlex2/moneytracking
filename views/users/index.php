<script>
	function confirmarEliminacion($id)
	{
		eliminar = confirm("¿Deseas eliminar este registro?");
		if (eliminar)
			window.location.href = "<?php echo APP_URL.'/users/delete/';?>"+$id;
		else
			alert("Eliminación cancelada");
	}
</script>

<div class="row">
	<h4>Users list</h4>
	<a class="btn btn-success" href="<?php echo APP_URL.'/users/add/'; ?>" >Add</a>
	<div class="table-responsive">
	<table class="table table-bordered" border="1">
		<caption>
			<h4>Total of registers: <?php echo $usersCount; ?></h4>
		</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Type</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if (!empty($users)) {
			foreach ($users as $user): 
		?>
		<tr>
			<th><?php echo $user["users"]["id"]; ?></th>
			<td><?php echo $user["users"]["username"]; ?></td>
			<td><?php echo $user["users"]["password"]; ?></td>
			<td><?php echo $user["types"]["name"]; ?></td>
			<td>
				<?php echo $this->Html->link("Edit", array(
					"controller"=>"users", 
					"method"=>"edit", 
					"arg" => $user["users"]["id"]
				)); ?>
				<button onclick="confirmarEliminacion(<?php echo $user["users"]["id"]; ?>);">
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