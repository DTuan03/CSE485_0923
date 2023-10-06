<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 12</title>
</head>
<body>
    <?php
    $numbers = array(
        'key1' => 12, 
        'key2' => 30, 
        'key3' => 4, 
        'key4' => -123, 
        'key5' => 1234, 
        'key6' => -12565, 
       );

    //In ra phần tử ở đầu
    $element = array_values($numbers)[0];
    echo 'Phần tử ở đầu '."{$element}"."<br>";
    //In ra phần tử ở cuối
    $element2 = array_values($numbers)[count($numbers)-1];
    echo 'Phần tử ở cuối '."{$element2}"."<br>";

    //Tìm max, min và sum
    $max = max($numbers);
    echo "Phần tử lớn nhất là: "."{$max}"."<br>";
    $min = min($numbers);
    echo "Phần tử lớn nhất là: "."{$min}"."<br>";
    $sum = array_sum($numbers);
    echo "Tổng mảng là: "."{$sum}"."<br>";

    // Sắp xếp mảng theo chiều tăng, giảm các giá trị
    echo "Sắp xếp theo tăng dần giá trị:"."<br>";
    asort($numbers);
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";

    echo "Sắp xếp theo giảm dần giá trị:"."<br>";
    arsort($numbers);
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";

    // Sắp xếp mảng theo chiều tăng, giảm các key
    echo "Sắp xếp theo tăng dần key:"."<br>";
    ksort($numbers);
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";

    echo "Sắp xếp theo giảm dần key:"."<br>";
    krsort($numbers);
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
    ?>
</body>
</html>