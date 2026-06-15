<?php
define("PI", 3.1416);

function cubeVolume($side) {
    return $side * $side * $side;
}

function rectangularPrismVolume($length, $width, $height) {
    return $length * $width * $height;
}

function cylinderVolume($radius, $height) {
    return PI * $radius * $radius * $height;
}

function coneVolume($radius, $height) {
    return (PI * $radius * $radius * $height) / 3;
}

function sphereVolume($radius) {
    return (4 / 3) * PI * $radius * $radius * $radius;
}

$cubeAnswer = cubeVolume(5);
$rectangularAnswer = rectangularPrismVolume(8, 4, 6);
$cylinderAnswer = cylinderVolume(3, 7);
$coneAnswer = coneVolume(4, 9);
$sphereAnswer = sphereVolume(6);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity 2 - Volume of Shapes</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
        }

        th, td {
            border: 2px solid black;
            padding: 12px;
            text-align: center;
            vertical-align: middle;
        }

        th {
            background-color: #ffa0cc;
        }

        .table-title {
            font-size: 22px;
            font-weight: bold;
        }

        .formula {
            font-style: italic;
        }
    </style>
</head>

<body>

    <h2>Activity 2: Volume of Shapes</h2>

    <table>
        <tr>
            <th colspan="4" class="table-title">Volume of Shapes</th>
        </tr>

        <tr>
            <th>Shape</th>
            <th>Values</th>
            <th>Formula</th>
            <th>Answer</th>
        </tr>

        <tr>
            <td>Cube</td>
            <td>s = 5</td>
            <td class="formula">V = s³</td>
            <td><?php echo $cubeAnswer; ?></td>
        </tr>

        <tr>
            <td>Right Rectangular Prism</td>
            <td>l = 8, w = 4, h = 6</td>
            <td class="formula">V = l × w × h</td>
            <td><?php echo $rectangularAnswer; ?></td>
        </tr>

        <tr>
            <td>Cylinder</td>
            <td>r = 3, h = 7</td>
            <td class="formula">V = πr²h</td>
            <td><?php echo round($cylinderAnswer, 2); ?></td>
        </tr>

        <tr>
            <td>Cone</td>
            <td>r = 4, h = 9</td>
            <td class="formula">V = πr²h / 3</td>
            <td><?php echo round($coneAnswer, 2); ?></td>
        </tr>

        <tr>
            <td>Sphere</td>
            <td>r = 6</td>
            <td class="formula">V = 4/3 × πr³</td>
            <td><?php echo round($sphereAnswer, 2); ?></td>
        </tr>
    </table>

</body>
</html>