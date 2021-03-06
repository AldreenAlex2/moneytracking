<script>
	function confirmarEliminacion($id)
	{
		eliminar = confirm("¿Deseas eliminar este registro?");
		if (eliminar)
			window.location.href = "<?php echo APP_URL.'/accounts/delete/';?>"+$id;
		else
			alert("Eliminación cancelada");
	}
</script>

<div class="row">

	<h4>List of accounts</h4>

	<a href="<?php echo APP_URL.'/accounts/add/'; ?>">Add</a>
<div class="table-responsive">
	<div class="table-responsive">
	<table class="table table-bordered" border="1">
		<caption>
			<h4>Total of registers: <?php echo $accountsCount; ?></h4>
		</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Name</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if (!empty($accounts)) {
			foreach ($accounts as $account): 
		?>
		<tr>
			<th><?php echo $account["accounts"]["id"]; ?></th>
			<td><?php echo $account["users"]["username"]; ?></td>
			<td><?php echo $account["accounts"]["name"]; ?></td>
			<td>
				<?php echo $this->Html->link("Edit", array(
					"controller"=>"accounts", 
					"method"=>"edit", 
					"arg" => $account["accounts"]["id"]
				)); ?>
				<button onclick="confirmarEliminacion(<?php echo $account["accounts"]["id"]; ?>);">
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