<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 9</title>
</head>
<body>
    <?php
    function lower($array){
        $lower = array_map('strtolower',$array);

        echo "<pre>";
        print_r($lower);
        echo "</pre>";
    }

    $arrs1 = array('1', 'B', 'C', 'E');
    $arrs2 = array('a', 0, null, false);

    lower($arrs1);
    lower($arrs2);
    ?>
</body>
</html>