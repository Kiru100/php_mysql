<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php exercise</title>
</head>
<body>
    <h1>exercise number 1</h1>
    <?php 
        $x = 10;
        $y = 10;
        $z=$x+$y;
        print $z*5;
    ?>

    <h1>Exercise Number 2</h1>
    <?php 
        $price=100;
        $vat = 0.21;
        $totalPrice = ($price * $vat)+$price;       
        echo "Price         : ${price} <br>";
        echo "Vat: ${vat} <br>";
        echo "Total Price   : ${totalPrice}";
    ?>

    <h1>Exercise Number 3</h1>
    <?php   
        $x=4;
        $y=9;
        $z=4;

        $average=($x + $y + $z)/3;
        echo "Average : ".number_format($average,2,'.','')

    
    ?>
   
</body>
</html>