<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - GGRC - If Statements</title>
</head>
<body>
    <?php
        echo "<h2>If Statements</h2>";
        $grade = 35;
        if($grade >= 50){
            echo "<h3 style='color: green'>You have passed</h3>";
        }
        else if($grade >= 40 && $grade < 50 ){
            echo "<h3 style='color: blue'>You did well</h3>";
        }
        else{
            echo "<h3 style='color: red'>You failed</h3>";
        }
    ?>
</body>
</html>