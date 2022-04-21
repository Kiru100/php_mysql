<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
        $cars1= "BMW";
        $cars2 = "Audi";
        $cars3 = "Mercedes";

        $cars = array("BWM", "Audi", "Mercedes",1);

        echo $cars[3];
        $cars2 = array("Volve", "Chevy", "volkswagen");

        echo "<br>";
        $myCar = array("Audi", 2015, 75.304);
        print_r($myCar);

        $cars = array_merge($cars,$cars2);

        echo "<br>";
        print_r($cars)



    ?>
</body>
</html>