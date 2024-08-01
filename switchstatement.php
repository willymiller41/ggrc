<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - GGRC - Switch Statements</title>
</head>
<body>
    <?php
        echo "<h2>Switch Statements</h2>";
        $grade = "C";
        switch($grade){
            case "A":
                echo "<h2 style = 'color: green'>You are a superstar</h2>";
                break;
            case "B":
                echo "<h2 style = 'color: blue'>You did well</h2>";
                break;
            default:
                echo "<h2 style = 'color: red'>You failed</h2>";
                break;
        }
    ?>
</body>
</html>