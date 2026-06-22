
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result Colors</title>

    <style>
        body {
            font-family: Arial;
            background-color: #ffd7ef;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: #fff8f0;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: #2d1822;
        }

        p {
            margin: 8px 0;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>My Favorite Colors</h2>

   
<?php
if (isset($_SESSION['color1'])) {
    echo "<p style='color:" . $_SESSION['color1'] . ";'>My Favorite Color 1: " . $_SESSION['color1'] . "</p>";
    echo "<p style='color:" . $_SESSION['color2'] . ";'>My Favorite Color 2: " . $_SESSION['color2'] . "</p>";
    echo "<p style='color:" . $_SESSION['color3'] . ";'>My Favorite Color 3: " . $_SESSION['color3'] . "</p>";
    echo "<p style='color:" . $_SESSION['color4'] . ";'>My Favorite Color 4: " . $_SESSION['color4'] . "</p>";
    echo "<p style='color:" . $_SESSION['color5'] . ";'>My Favorite Color 5: " . $_SESSION['color5'] . "</p>";
} else {
    echo "<p>No session data found.</p>";
}
?>



</div>

</body>
</html>
