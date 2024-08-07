<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Function to generate a random number between $min and $max
function generateRandomNumber($min, $max) {
    return rand($min, $max);
}

// Example usage
$min = 1; // Minimum value
$max = 10; // Maximum value

$randomNumber = generateRandomNumber($min, $max);

echo "Random number $randomNumber";
?>

</body>
</html>