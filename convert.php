<?php
function convertToMetric($value, $unit) {
    switch($unit) {
        case 'inches':
            return $value * 2.54; // Convert inches to centimeters
        case 'feet':
            return $value * 0.3048; // Convert feet to meters
        case 'yards':
            return $value * 0.9144; // Convert yards to meters
        case 'miles':
            return $value * 1.60934; // Convert miles to kilometers
        case 'lbs':
            return $value * 0.4535924; // Convert lbs to kilograms
        case 'stone':
            return $value * 6.350293; // Convert stone to kilograms
        default:
            return null; // Invalid unit
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<form action=\"index.php\" method=\"GET\"><input type=\"submit\" value=\"Home\"/></form>";
    $value = floatval($_POST["value"]);
    $unit = $_POST["unit"];
    $new_unit;
    $convertedValue = convertToMetric($value, $unit);

    if ($convertedValue !== null) {
        switch($unit) {
            case 'inches':
                $new_unit = "centimeters";
                break;
            case 'feet':
                $new_unit = "meters";
                break;
            case 'yards':
                $new_unit = "meters";
                break;
            case 'miles':
                $new_unit = "kilometers";
                break;
            case 'lbs':
                $new_unit = "kilograms";
                break;
            case 'stone':
                $new_unit = "kilograms";
                break;
        }
        echo "<h1>Conversion Result</h1>";
        echo "<p>$value $unit is equal to $convertedValue $new_unit.</p>";
    } else {
        echo "<h1>Error</h1>";
        echo "<p>Invalid unit provided.</p>";
    }
}
?>
