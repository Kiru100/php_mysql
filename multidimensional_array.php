<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimentionl Arrays</title>
</head>
<body>
    <?php 
        
        $cars = array(
                "Expensive" => array("Audi","Mercedes","BMW"),
                "Inexpensive" => array("Volvo", "Ford","Toyota")
             );

        echo $cars["Expensive"][0];
    ?>    

</body>
</html>