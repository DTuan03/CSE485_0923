<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 13</title>
</head>
<body>
    <?php
    $numbers = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
    65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

    //Tính trung bình mảng
    $count = count($numbers);
    $mean = array_sum($numbers)/$count;
    echo "Trung bình của mảng là: ".round($mean,4)."<br>";

    // Liệt kê các số có giá trị lớn hơn giá trị trung bình đó
    echo "Giá trị lớn hơn giá trị trung bình là: ";
    for($i=0;$i<$count;$i++){
        if($numbers[$i]>$mean)
            echo $numbers[$i]." ";
    }

    // Liệt kê các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình đó 
    echo "<br>"."Giá trị nhỏ hơn bằng giá trị trung bình là: ";
    for($i=0;$i<$count;$i++){
        if($numbers[$i]<=$mean)
            echo $numbers[$i]." ";
    }
    ?>
</body>
</html>