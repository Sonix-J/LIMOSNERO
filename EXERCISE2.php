<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Cities</title>
    <link rel="stylesheet" href="exercise2.css">
</head>
<body>
    <?php 
        function displayCities($largestCities) {
            echo implode(", ", $largestCities);
        }

        function displaySortedCities($largestCities) {
            sort($largestCities);
            echo "<ul>";
            foreach ($largestCities as $city) {
                echo "<li>{$city}</li>";
            }
            echo "</ul>";
        }

        $largestCities = ["Tokyo", "Mexico City", "New York City", "Mumbai", 
                          "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];
    ?>
    <h1 class="first">Largest</h1>
    <h1 class="second">Cities</h1>

    <div id="container">
        <div id="container-content">
        <div id="list_row">
            <div class="list_box">
                <p class="display_description">Original List of Cities</p>
                <p><?php displayCities($largestCities); ?></p>
            </div>

                <div class="list_box">
                    <p class="display_description">Sorted Original Cities</p>
                    <?php displaySortedCities($largestCities); ?>
                </div>

                <div class="list_box">
                    <p class="display_description">Adding New Cities</p>
                    <?php 
                        $largestCities = array_merge($largestCities, ["Los Angeles", "Calcutta", "Osaka", "Beijing"]);
                        displayCities($largestCities);
                    ?>
                </div>

                <div class="list_box">
                    <p class="display_description">Sorted Final Cities</p>
                    <?php displaySortedCities($largestCities); ?>               
                </div>
            </div>  
        </div>
    </div>
</body>
</html>
