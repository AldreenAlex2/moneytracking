<div>
    <h4>Edit account</h4>
    <form action="<?php echo APP_URL."/accounts/edit"; ?>" method="POST">
    	<input type="hidden" name="id" value="<?php echo $account["id"]; ?>">
        <div>
            <label for="user_id">Username:</label>
            <select name="user_id" id="user_id">
                <?php 
                foreach ($users as $user):
                    if ($user["users"]["id"] == $account["user_id"]) {
                ?>
                    <option selected value="<?php echo $user["users"]["id"]; ?>">
                        <?php echo $user["users"]["username"]; ?>
                    </option>
                <?php 
                    } else {
                ?>
                    <option value="<?php echo $user["users"]["id"]; ?>">
                        <?php echo $user["users"]["username"]; ?>
                    </option>
                <?php
                    }
                    endforeach;
                ?>
            </select>
        </div>
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $account["name"]; ?>">
        </div>
        <input type="submit" value="Save">
    </form>
</div>