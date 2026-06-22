<?php
include 'db.php';

$sql = "SELECT * FROM dogs";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="page">

    <nav class="navbar">
        <div class="logo">DOG INFO</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="DogRegister.php">Register Dog</a></li>
            <li><a href="DogView.php">View Records</a></li>
        </ul>
    </nav>

    <section class="records-section">
        <span class="small-title">🐾 Saved Dogs</span>
        <h1>Dog Records</h1>
        <p class="subtitle">Here are the dog information records saved in the database.</p>

        <div class="records-grid">
            <?php
            if (mysqli_num_rows($result) > 0) {
                $count = 1;

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='record-card'>";
                    echo "<h3>🐶 Dog " . $count . "</h3>";
                    echo "<p><strong>Name:</strong> " . $row['d_name'] . "</p>";
                    echo "<p><strong>Breed:</strong> " . $row['d_breed'] . "</p>";
                    echo "<p><strong>Age:</strong> " . $row['d_age'] . "</p>";
                    echo "<p><strong>Address:</strong> " . $row['d_address'] . "</p>";
                    echo "<p><strong>Color:</strong> " . $row['d_color'] . "</p>";
                    echo "<p><strong>Height:</strong> " . $row['d_height'] . "</p>";
                    echo "<p><strong>Weight:</strong> " . $row['d_weight'] . "</p>";
                    echo "</div>";

                    $count++;
                }
            } else {
                echo "<p>No dog records found.</p>";
            }
            ?>
        </div>

        <a class="back-btn" href="DogRegister.php">Back to Register</a>
    </section>

</div>

</body>
</html>