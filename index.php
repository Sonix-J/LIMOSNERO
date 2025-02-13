<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Conditions</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

    <div class="container">
        <h1>"Kinds of Weather"</h1>
        <?php 
            $weather = ["rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"];

            echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had 
            {$weather[5]} and {$weather[6]}. Then came {$weather[1]} with a few {$weather[2]} 
            and some {$weather[0]}. At least we didn't get any {$weather[3]} or {$weather[4]}.</p>";
        ?>
    </div>

</body>
</html>