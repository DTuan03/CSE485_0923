<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 14</title>
</head>
<body>
    <?php
        $array1 = array(
            [77, 87],
            [23, 45]
        );
        $array2 = array(
            'giá trị 1',
            'giá trị 2'
        );
        

        $array3 = array_merge(array($array2[0]), $array1[0]);
        $array4 = array_merge(array($array2[1]), $array1[1]);

        $array5 = array($array3, $array4);

        echo "<pre>";
        print_r($array5);
        echo "</pre";
        
    ?>
</body>
</html>