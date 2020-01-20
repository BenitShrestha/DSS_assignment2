<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment-02</title>
</head>
<body bgcolor="lime">
<?php
$e = 30;
$r = 20;
 
switch ($e+$r===50) {
    case 1:
        echo "The sum is 50.";
        break;
    case 2:
        echo "The sum is 00.";
        break;
    case 3:
        echo "The sum is 30.";
        break;
    default:
        echo "The sum is not mentioned";
}
?>
<br>
<br>
<?php
    switch($e-$r==10)
    {
        case 1:
            echo "The difference is 10.";
        break;
        case 2:
            echo "The difference is 20.";
        break;
        case 3:
            echo "The difference is a Horcrux.";
            break;
        default:
        echo "The difference doesn't exist.";
    }

?>
<br>
<br>
<?php
$e=30;
$r=20;

    switch($e*$r==600)
    {
        case 1:
            echo "The product is 600.";
        break;
        case 2:
            echo "The product is 700.";
        break;
        case 3:
            echo "The product is 0000.";
            break;
        default:
        echo "The product has no existence.";
    }

?>
</body>
</html>