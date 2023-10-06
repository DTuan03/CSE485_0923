<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 8</title>
</head>
<body>
    <?php
    $array = array('programming', 'php', 'basic', 'dev', 'is', 'program is PHP');
    $arrNumber = array();

    $tem = 0;

    for($i=1;$i<count($array);$i++){
        if(strlen($array[$i]) > strlen($array[$tem])){
            $max = $array[$i];
            $maxNumber = strlen($array[$i]);
            $tem++;
        }
        else{
            $max = $array[$tem];
            $maxNumber = strlen($array[$tem]);
            $tem++;
        }
    }

    echo "Chuỗi lớn nhất là ".$max.", độ dài = ".$maxNumber."</br>";

    $tem = 0;

    for($i=1;$i<count($array);$i++){
        if(strlen($array[$i]) < strlen($array[$tem])){
            $min = $array[$i];
            $minNumber = strlen($array[$i]);
            $tem++;
        }
        else{
            $min = $array[$tem];
            $minNumber = strlen($array[$tem]);
            $tem++;
        }
    }

    echo "Chuỗi bé nhất là ".$min.", độ dài = ".$minNumber;

    // echo $max;
    // echo "<pre>";
    // print_r($arrNumber);
    // echo "</pre>";
    ?>
</body>
</html>