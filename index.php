
<?php 
    $partite=[
        [
            "squadracasa"=>"squadracasa 1 ",
            "squadraospite"=>"squadraospite 1 ",
            "punticasa"=>rand(1,100),
            "puntiospiti"=>rand(1,100),
        ],
        [
            "squadracasa"=>"squadracasa 1 ",
            "squadraospite"=>"squadraospite 1 ",
            "punticasa"=>rand(1,100),
            "puntiospiti"=>rand(1,100),
        ],
        [
            "squadracasa"=>"squadracasa 1 ",
            "squadraospite"=>"squadraospite 1 ",
            "punticasa"=>rand(1,100),
            "puntiospiti"=>rand(1,100),
        ],
        ]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>mail control</title>
</head>

<body class="debug">
    <?php
        foreach($partite as $partit){
    ?>
        <li> <?php echo $partit["squadracasa"] . " - " . $partit["squadraospite"] . " |" .  $partit["punticasa"] . "-" . $partit["puntiospiti"] ?> </li>
    <?php        
        }
    ?>
    <!-- <form action="" method="get">
        <input type="text" name="fname">
        <input type="text" name="mail">
        <input type="number" name="age">
    </form> -->
    <?php
       /* $name=$_GET["fname"];
        if(strlen($name)>3){
            echo "w";
        }*/
    ?>
     <form method="get">
        name:   <input  type="text" name="name" placeholder="name">
        mail:   <input  type="text" name="mail" placeholder="mail">
        number: <input  type="text" name="number" placeholder="123456789">
        <input type="submit">
    </form>

    <?php 
        $name=$_GET["name"];
        $mail=$_GET["mail"];
        $number=$_GET["number"];
        $flags=false;
        if(strlen($name)>3){
            if(strpos($mail,"@") && strpos($mail,".")){
                if(is_numeric($number)){
                    $flags=true;
                }
            }
        }
        if($flags==true){
            echo "Accesso riuscito";
        }else{
            echo "Accesso negato";
        }
    ?>
    
    <script src="js/main.js"></script>
</body>
</html>