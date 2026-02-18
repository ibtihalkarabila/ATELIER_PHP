<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste d'Elements</title>
</head>
<body>
    <?php 
    $elements = array("pomme","banane", "Cerise", "Datte");
    echo "<ul>";
    foreach($elements as $elements) {
        echo "<li>$element</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>