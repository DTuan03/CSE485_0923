<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
    <?php
    $arrs = array('đỏ', 'xanh', 'cam', 'trắng');

    echo '"Màu '."{$arrs[0]}".' là màu yêu thích của Anh, '."{$arrs[3]}". ' là màu yêu thích của Sơn, '."{$arrs[0]}".' là màu yêu 
    thích của Thắng, còn màu yêu thích của tôi là màu '."{$arrs[3]}".'"';
    ?>
</body>
</html>