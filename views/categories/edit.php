<div class="row">
<div class="col-med-6 col-sm-12 col-xs-12">
    <h4>Edit category</h4>
    <form action="<?php echo APP_URL."/categories/edit"; ?>" method="POST">
    	<input type="hidden" name="id" value="<?php echo $category["id"]; ?>">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $category["name"]; ?>">
        </div>
        <input type="submit" value="Guardar">
    </form>
</div>