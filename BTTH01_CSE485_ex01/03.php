<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
</head>
<body>
    <?php
        $arrs = array('PHP', 'HTML', 'CSS', 'JS');
    ?>

    <table style="border-collapse: collapse;">
        <thead>
            <th style="border: 1px solid black ">Tên khóa học</th>
        </thead>
        <tbody>
            <tr>
                <td style="border: 1px solid black"><?php echo $arrs[0] ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid black"><?php echo $arrs[1] ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid black"><?php echo $arrs[2] ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid black"><?php echo $arrs[3] ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>