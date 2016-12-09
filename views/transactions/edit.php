<div class="row">
<div class="col-med-6 col-sm-12 col-xs-12">
    <h4>Edit transaction</h4>
    <form action="<?php echo APP_URL."/transactions/edit"; ?>" method="POST">
    	<input type="hidden" name="id" value="<?php echo $transaction["id"]; ?>">
        <div>
            <label for="operation">Operation:</label>
            <?php if ($transaction["amount"] <= 0) { ?>
            <select name="operation" id="operation">
                <option value="egreso">Egreso</option>
                <option value="ingreso">Ingreso</option>
            </select>
            <?php } else { ?>
            <select name="operation" id="operation">
                <option value="ingreso">Ingreso</option>
                <option value="egreso">Egreso</option>
            </select>
            <?php } ?>
        </div>
        <div>
            <label for="account_id">Account:</label>
            <select name="account_id" id="account_id">
                <?php 
                foreach ($accounts as $account):
                    if ($account["accounts"]["id"] == $transaction["account_id"]) {
                ?>
                    <option selected value="<?php echo $account["accounts"]["id"]; ?>">
                        <?php echo $account["accounts"]["name"]; ?>
                    </option>
                <?php 
                    } else {
                ?>
                    <option value="<?php echo $account["accounts"]["id"]; ?>">
                        <?php echo $account["accounts"]["name"]; ?>
                    </option>
                <?php
                    }
                    endforeach;
                ?>
            </select>
        </div>
        <div>
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id">
                <?php 
                foreach ($categories as $category):
                    if ($category["categories"]["id"] == $transaction["category_id"]) {
                ?>
                    <option selected value="<?php echo $category["categories"]["id"]; ?>">
                        <?php echo $category["categories"]["name"]; ?>
                    </option>
                <?php 
                    } else {
                ?>
                    <option value="<?php echo $category["categories"]["id"]; ?>">
                        <?php echo $category["categories"]["name"]; ?>
                    </option>
                <?php
                    }
                    endforeach;
                ?>
            </select>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" cols="30" rows="3"><?php echo $transaction["description"]; ?></textarea>
        </div>
        <div>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" value="<?php echo $transaction["date"]; ?>">
        </div>
        <div>
            <label for="amount">Amount:</label>
            <input type="number" step="any" id="amount" name="amount" value="<?php echo abs($transaction["amount"]); ?>">
        </div>
        <input type="submit" value="Save">
    </form>
</div>