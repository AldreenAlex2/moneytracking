<div class="row">
<div class="col-md-6 col-sm-12 col-xs-12">
    <h4>Edit user</h4>
    <form action="<?php echo APP_URL."/users/edit"; ?>" method="POST">
    	<input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
        <div class="form-group">
            <label for="username">Username:</label>
            <input  class="form-control"> <type="text" name="username" value="<?php echo $user["username"]; ?>">
        </div>
        <div class="form-group">
            <label for="newPassword">NewPassword:</label>
            <input class="form-control" type="password" name="newPassword">
        </div>
        <div class="form-group">
            <label for="type_id">Type:</label>
            <select name="type_id" id="type_id">
                <?php 
                foreach ($types as $type):
                    if ($type["types"]["id"] == $user["type_id"]) {
                ?>
                    <option selected value="<?php echo $type["types"]["id"]; ?>">
                        <?php echo $type["types"]["name"]; ?>
                    </option>
                <?php 
                    } else {
                ?>
                    <option value="<?php echo $type["types"]["id"]; ?>">
                        <?php echo $type["types"]["name"]; ?>
                    </option>
                <?php
                    }
                    endforeach;
                ?>
            </select>
        </div>
        <input type="submit" value="Save" >
    </form>
</div>