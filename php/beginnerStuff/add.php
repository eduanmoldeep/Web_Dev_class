<?php

function addition($a, $b){
    $c = $a + $b;
    return $c;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Functions</title>
</head>
<body>

    <?= $a = addition(2,4); ?>
    <br/>

    <?= $a = addition(4,5); ?>
</body>
</html>