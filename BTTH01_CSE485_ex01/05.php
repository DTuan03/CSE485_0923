<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
</head>
<body>
    <?php 
    $a = array(
        'a' => array(
              'b' => 0,
              'c' => 1
        ),
        'b' => array(
               'e' => 2,
               'o' => array(
               'b' => 3
               )
        )
    );
    // Hãy lấy giá trị = 3 mà có key là b từ mảng trên
    $key1 = $a['b'];
    $key2 = $key1['o'];
    echo $key2['b']."<br>";

    //Hãy lấy giá trị = 1 mà có key là c từ mảng trên
    $key3 = $a['a'];
    echo $key3['c']."<br>";

    //Hãy lấy thông tin của phần tử có key là a
    echo "<pre>";
    print_r($a['a']);
    echo "<pre>";
    ?>
</body>
</html>