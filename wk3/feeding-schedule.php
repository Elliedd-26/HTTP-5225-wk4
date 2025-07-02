<!DOCTYPE html>
<html>
<head>
    <title>Quirky Zoo Feeding Schedule</title>
</head>
<body>
    <h2>Welcome to the Quirky Zoo!</h2>

    <?php
    //$currentHour = date("G");
    $currentHour = 8;

    if ($currentHour >= 5 && $currentHour < 9) {
        $meal = "Breakfast";
        $food = "Bananas, Apples, and Oats";
    } elseif ($currentHour >= 12 && $currentHour < 14) {
        $meal = "Lunch";
        $food = "Fish, Chicken, and Vegetables";
    } elseif ($currentHour >= 19 && $currentHour < 21) {
        $meal = "Dinner";
        $food = "Steak, Carrots, and Broccoli";
    } else {
        echo "<p>It's not feeding time. The animals are resting.</p>";
        return;
    }

    echo "<p>It's time for <strong>$meal</strong>! The animals will eat: <strong>$food</strong>.</p>";
    ?>
</body>
</html>
