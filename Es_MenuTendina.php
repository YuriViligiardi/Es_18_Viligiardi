<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Menu a Tendina</title>
</head>
<body>
    <?php
        $film = ["Cars", "Fast and Furious", "Iron Man", "Deadpool", "La vita è bella"];
        $nameMenu = "filmpreferito";
        createMenu($film, $nameMenu);

        function createMenu($array, $name){
            $value = 1;
            echo "<select name='$name'>";
                foreach ($array as $elem) {
                    echo "<option value='f" . $value . "'>$elem</option>";
                    $value++;
                }
            echo "</select>";
        }
    ?>
</body>
</html>