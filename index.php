<?php include __DIR__ . '/./db/database.php'; ?>

<?php foreach($newJson as $arr){ ?>

    <?php foreach($arr as $arr2){ ?>

        <?php echo '<img src="' . $arr2["poster"] . '"/>'; ?>
        
        <h3><?php echo $arr2["title"]; ?></h3>
        <p><?php echo $arr2["author"]; ?></p>

    <?php }; ?>

<?php }; ?>

