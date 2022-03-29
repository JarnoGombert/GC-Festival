<?php 
include '../src/databaseFunctions.php';
$lineup = db_getData("SELECT * FROM lineup");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php'CSS_FOLDER'?> style.css">
</head>
<body>
    <?php include 'header.php';?>
        <div class="page lineup">
            <div class="container">
                <h1>Line-up</h1>
                <div class="artists">
                <?php
                if ($lineup -> num_rows > 0)
                {
                    while($artist = $lineup->fetch_assoc())
                    {
                ?>

                    <div class="artist">
                        <img src="<?php echo IMAGE_FOLDER . "/" . $artist['artistImage']; ?>" alt="">
                        <h2><?php echo $artist['artistName']; ?></h2>
                    </div>

                <?php
                    }
                }
                ?>
                </div>
            </div>
        </div>
    <?php include 'footer.php';?>
</body>
</html>
