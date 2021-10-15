<?php include __DIR__ . '/./db/database.php'; ?>

<?php foreach($newJson as $arr){ ?>

    <?php foreach($arr as $arr2){ ?>

        <img :src="<?php echo ($arr2["poster"]); ?>" :alt="record img">
        <h3><?php echo $arr2["title"]; ?></h3>
        <p><?php echo $arr2["author"]; ?></p>

    <?php }; ?>

<?php }; ?>

