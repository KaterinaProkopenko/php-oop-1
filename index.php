<?php 
    @include('./data/Movie.php');

    $sinister = new Movie('Sinister', 'Horror', '1:30:14', 'US', 'en');
    $batman = new Movie('Batman Returns', 'Drama', '2:06:01', 'US', 'en');
    
    /* Ho cambiato il title */
    echo $sinister->setTitle('Sinister 2');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <main>
        <div>
            <p>Title: <?php echo $sinister->title; ?></p>
            <p>Genre: <?php echo $sinister->genre; ?></p>
            <p>Time: <?php echo $sinister->runningTime; ?></p>
            <p>Country: <?php echo $sinister->country; ?></p>
            <p>Language: <?php echo $sinister->language; ?></p>

        </div>
        <hr>

        <div>
            <p>Title: <?php echo $batman->title; ?></p>
            <p>Genre: <?php echo $batman->genre; ?></p>
            <p>Time: <?php echo $batman->runningTime; ?></p>
            <p>Country: <?php echo $batman->country; ?></p>
            <p>Language: <?php echo $batman->language; ?></p>
        </div>

    </main>
</body>
</html>

<!-- <?php ; ?> -->