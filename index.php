<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - GGRC - Index</title>
</head>
<body>
    <h2>Follow each link to the page example</h2>
    <ul>
        <li><a href="array.php">Simple array and printouts</a></li>
        <li><a href="forloop.php">Simple For loop</a></li>
        <li><a href="dowhile.php">Simple Do While</a></li>
        <li><a href="whileloop.php">Simple While loop</a></li>
        <li><a href="ifstatement.php">Simple If statement</a></li>
        <li><a href="switchstatement.php">Simple Switch statement</a></li>
    </ul>
    <h1>Hello World!</h1>
    <?php
        echo 'Hello PHP';
        echo '<br/>';
        echo 'Second Line';
    ?>
    <?php
        echo '<br/>';
        $name = 'Guillermo Miller';
        $age = 57;
        $email = 'willymiller41@hotmail.com';
        echo '<br/>';
        echo '<h1>My name is: '.$name.'</h1>';
        echo '<h1>My age is: '.$age.'</h1>';
        echo "<h1>My email is: $email </h1>";
    ?>
</body>
</html>