<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 11</title>
</head>
<body>
    <?php 
    $array = array(1, 2, 3, 4, 5);
    array_splice($array,3,1);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    ?>
</body>
</html>