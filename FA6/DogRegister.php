<?php
include 'db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $d_name = $_POST['d_name'];
    $d_breed = $_POST['d_breed'];
    $d_age = $_POST['d_age'];
    $d_address = $_POST['d_address'];
    $d_color = $_POST['d_color'];
    $d_height = $_POST['d_height'];
    $d_weight = $_POST['d_weight'];

    $sql = "INSERT INTO dogs (d_name, d_breed, d_age, d_address, d_color, d_height, d_weight)
            VALUES ('$d_name', '$d_breed', '$d_age', '$d_address', '$d_color', '$d_height', '$d_weight')";

    if (mysqli_query($conn, $sql)) {
        $message = "Dog information saved successfully!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Register</title>
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

    <section class="register-section">
        <div class="register-text">
            <span class="small-title">🐶 Dog Registration</span>
            <h1>Not only people need a home</h1>
            <p>Register dog information and save it directly to the database.</p>
        </div>

        <div class="form-card">
            <h2>Dog Information</h2>

            <?php if ($message != "") { ?>
                <p class="message"><?php echo $message; ?></p>
            <?php } ?>

            <form method="POST" action="">
                <label>Name</label>
                <input type="text" name="d_name" required>

                <label>Breed</label>
                <input type="text" name="d_breed" required>

                <label>Age</label>
                <input type="text" name="d_age" required>

                <label>Address</label>
                <input type="text" name="d_address" required>

                <label>Color</label>
                <input type="text" name="d_color" required>

                <label>Height (cm) </label>
                <input type="text" name="d_height" required>

                <label>Weight</label>
                <input type="text" name="d_weight" required>

                <button type="submit">Save Dog</button>
            </form>

            <a class="view-link" href="DogView.php">View Dog Records</a>
        </div>
    </section>

</div>

</body>
</html>