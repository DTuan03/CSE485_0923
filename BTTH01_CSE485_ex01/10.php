<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 9</title>
</head>
<body>
    <?php
    function upper($array){
        $upper = array_map('strtoupper',$array);

        echo "<pre>";
        print_r($upper);
        echo "</pre>";

    }

    $arrs1 = array('1', 'B', 'C', 'E');
    $arrs2 = array('a', 0, null, false);

    upper($arrs1);
    upper($arrs2);
    ?>
</body>
</html>