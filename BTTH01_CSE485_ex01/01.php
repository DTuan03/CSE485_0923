<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính</title>
</head>
<body>
<?php
$arrs  = array(2, 5, 6, 9, 2, 5, 6, 12 ,5);

//Tổng
echo "Tổng các phần tử = ";
$sum = 0;
for($i = 0; $i<count($arrs); $i++){
    $sum += $arrs[$i];
    echo $arrs[$i];
    if($i != count($arrs)-1)
        echo ' + ';
    else{
         echo ' = ';
         break;
    } 
}
echo $sum.'<br>'; 

//Tích
echo "Tích các phần tử = ";
$result = 1;
for($i = 0; $i<count($arrs); $i++){
    $result *= $arrs[$i];
    echo $arrs[$i];
    if($i != count($arrs)-1)
        echo ' * ';
    else{
         echo ' = ';
         break;
    } 
}
echo $result.'<br>';

//Hiệu
echo "Hiệu các phần tử = 2 - ";
$diff = $arrs[0];
for($i = 1; $i<count($arrs); $i++){
    $diff -= $arrs[$i];
    echo $arrs[$i];
    if($i != count($arrs)-1)
        echo ' - ';
    else{
         echo ' = ';
         break;
    } 
}
echo $diff.'<br>';

//Thương
echo "Thương các phần tử = 2 / ";
$quotient = $arrs[0];
for($i = 1; $i<count($arrs); $i++){
    $quotient /= $arrs[$i];
    echo $arrs[$i];
    if($i != count($arrs)-1)
        echo ' / ';
    else{
         echo ' = ';
         break;
    } 
}
echo round($quotient,6).'<br>';


?>
</body>
</html>