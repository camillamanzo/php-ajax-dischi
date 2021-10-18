<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Albums</title>

</head>
<body>
    <?php include __DIR__ . '/./db/database.php'; ?>
    <style><?php include __DIR__ . '/./css/style.css'; ?></style>
    
    <main>
        <div class="container">
            <div class="row wrapper mx-auto py-5">

                <!-- first foreach starts -->
                <?php foreach($newJson as $arr){ ?>

                    <!-- second foreach starts -->
                    <?php foreach($arr as $arr2){ ?>
                        <div class="col-3 mx-auto">

                            <!-- echoing the elements -->
                            <div class="img">
                                <img src="<?php echo $arr2["poster"]?>" alt="<?php echo $arr2["title"]?>">
                            </div>
                            <div>
                                <h3><?php echo $arr2["title"]; ?></h3>
                                <p><?php echo $arr2["author"]; ?></p>
                            </div>

                        </div>

                    <!-- second foreach ends -->
                    <?php }; ?>

                <!-- first foreaach ends -->
                <?php }; ?>
            </div>
        </div>
    </main>
    
</body>
</html>