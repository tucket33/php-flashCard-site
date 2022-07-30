<?php $number = filter_input(INPUT_GET,'num', FILTER_SANITIZE_NUMBER_INT); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="view/css/main.min.css">
    </head>

    <body>
        <?php include("view/header.php"); ?>

        <?php if($number){ 
            include("view/results.php");
        } else{
            include("view/form.php");
        }
        ?>
        <?php include("view/footer.php"); ?>

    </body>

</html>