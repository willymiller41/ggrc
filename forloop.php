<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - GGRC - For loop</title>
</head>
<body>
    <?php
        echo "<h2>For loop</h2>";
        for($count = 0; $count < 10; $count++){
            echo "<p>Hello World!</p>";
        }

        for($count = 0; $count < 10; $count++){
            echo "<p>The count is: $count</p>";
        }
    ?>
</body>
</html>