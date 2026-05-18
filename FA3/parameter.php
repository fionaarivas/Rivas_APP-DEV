<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP User Defined Functions</title>


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #8dcdd9;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 60%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;

        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        
        th {
            background-color: #7df8ff;

        }
    </style>

</head>
<body>

<h2>PHP User Defined Functions</h2>

<?php 

function solveNumbers($num1, $num2, $num3) {
    $sum = $num1 + $num2 + $num3;
    $difference = $num1 - $num2 - $num3;
    $product = $num1 * $num2 * $num3;
    $quotient = $num1 / $num2 / $num3;

    echo "<table>";
    echo "<tr><th colspan='2'>My Parameter Values: $num1, $num2, $num3</th></tr>";
    echo "<tr><td>Addition</td><td>$sum</td></tr>";
    echo "<tr><td>Subtraction</td><td>$difference</td></tr>";
    echo "<tr><td>Multiplication</td><td>$product</td></tr>";
    echo "<tr><td>Division</td><td>$quotient</td></tr>";
    echo "</table>";

}

solveNumbers(25, 13, 6);


?>
    
</body>
</html>