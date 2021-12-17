<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bad Words PHP</title>
</head>
<body>
    <?php
        $para = "The headphones were on. They had been utilized on purpose. She could hear her mom yelling in the background, but couldn't make out exactly what the yelling was about. That was exactly why she had put them on. She knew her mom would enter her room at any minute, and she could pretend that she hadn't heard any of the previous yelling.";
    ?>
    <div class="container">

        <p>
            <span>Paragraph:</span>
            <?php 
                echo $para;
            ?>

        </p>

        <div>
            <span>Number of words:</span>
            <?php 
                echo strlen($para);
            ?>
        </div>

        <form action="" method="get">
            <input type="text" name="censored" value="" placeholder="add the censored word">
        </form>


        <p>
            <span>Censored Paragraph:</span>
            <?php
                $censored = $_GET['censored'];
                $censo_para = str_replace($censored, "***", $para);
                echo $censo_para;
            ?>
        </p>

        <div>
            <span>Number of words in censored para:</span>
            <?php 
                echo strlen($censo_para);
            ?>
        </div>
    </div>

</body>
</html>