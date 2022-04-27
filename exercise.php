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

    <h1>Exercise 4: Centimeters to Inches</h1>
    <?php 
        $countries = array("Netherland"=>"Amsterdam","Germany"=>"Berlin","Thailand"=>"Bangkok");

        foreach ($countries as $key=>$value){
            echo "The capital of ${key} is ${value} <br>";
        }
    ?>

    <h1>Exercise Number 5;</h1>
    <?php 
        $cm = 150;
        $inch = 0.39;
        $cmToInch = $cm* $inch;

        echo "${cm} centemeters is ${cmToInch} inches"
    ?>

<h1>Exercise 8</h1>
<?php 
    $expenses = array(1,2,3,4,5,6,6,7);
    $totalAmount = 0 ;
    $amountofExpenses = 0;

    foreach($expenses as $expense){
        $totalAmount = $totalAmount + $expense;
        $amountofExpenses= $amountofExpenses+1;
    }
    echo "My ".$amountofExpenses." biggest expenses were ".$totalAmount;
   
?>

<h1>Exercise 7</h1>
<?php 
    $weather = array("rain","sunshine","clouds","hail","sleet","snow","wind");
?>
</body>
</html>