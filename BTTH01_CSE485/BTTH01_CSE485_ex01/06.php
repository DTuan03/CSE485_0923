<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6</title>
</head>
<body>
    <?php
    $keys = array(
        "field1"=>"first",
        "field2"=>"second",
        "field3"=>"third"
       );
    $values = array(
        "field1value"=>"dinosaur",
        "field2value"=>"pig",
        "field3value"=>"platypus"
       );
    $key1 = $keys["field1"];
    $value1 = $values['field1value'];

    $keyAndValues = array(
        "{$keys["field1"]}" =>  "{$values['field1value']}",
        "{$keys["field2"]}" =>  "{$values['field2value']}",
        "{$keys["field3"]}" =>  "{$values['field3value']}",
    );

    echo "<pre>";
    print_r($keyAndValues);
    ?>

</body>
</html>