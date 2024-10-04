<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function stampaLista($num, $tipo) {
            $string = "";
            for($i = 1; $i <= $num; $i++) {
                if($i%5 == 0) {
                    $string = $string . "<li>$i</li>";
                }
            }
            if($tipo == "o") {
                echo "<ol>" . $string . "</ol>";
            } else {
                echo "<ul>" . $string . "</ul>";
            }
        }
        stampaLista(100,"u");
    ?>
</body>
</html>