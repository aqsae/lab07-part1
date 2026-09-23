<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week</title>
</head>
<body>
    <h1>PHP variables, arrays and operators</h1>
    <?php
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        echo "<p>The days of the week are: <br>" . implode(", ", $days) . "</p>";

        $frenchdays = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
        echo "<p>The days of the week in French are: <br>" . implode(", ", $frenchdays) . "</p>";
    ?>


</body>
</html>
