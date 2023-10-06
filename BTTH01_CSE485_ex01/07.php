<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 7</title>
</head>
<body>
    <?php
    $array = array(12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0);
    echo "Các số từ 100 đến 200 và chia hết cho 5 là: ";
    for($i=0; $i<count($array)-1;$i++){
        if($array[$i]>=100 && $array[$i] <= 200 && $array[$i]%5==0){
            echo $array[$i]." ";
        }
    }
    ?>
</body>
</html>