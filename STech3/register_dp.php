<?php
include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"];
    $middleName = $_POST["middle_name"];
    $lastName = $_POST["last_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $contactNumber = $_POST["contact_number"];

    if ($password != $confirmPassword) {
        $message = "Password and confirm password are not the same.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users 
                (first_name, middle_name, last_name, username, password, birthday, email, contact_number)
                VALUES 
                ('$firstName', '$middleName', '$lastName', '$username', '$hashedPassword', '$birthday', '$email', '$contactNumber')";

        if (mysqli_query($conn, $sql)) {
            $message = "Registration successful! You can now login.";
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration with Database</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            width: 380px;
            margin: 40px auto;
            background-color: #ffc1dc;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #ff5aa5;
        }

        h3 {
            text-align: center;
            font-weight: normal;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 9px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            cursor: pointer;
        }

        .message {
            text-align: center;
            margin-top: 15px;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: gray;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>

<body>

<div class="container">
    <h3>My Personal Information</h3>

    <form method="POST" action="">
        <label>First Name</label>
        <input type="text" name="first_name" required>

        <label>Middle Name</label>
        <input type="text" name="middle_name" required>

        <label>Last Name</label>
        <input type="text" name="last_name" required>

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required>

        <label>Birthday</label>
        <input type="text" name="birthday" placeholder="March 22, 2004" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Contact Number</label>
        <input type="text" name="contact_number" required>

        <button type="submit">Submit</button>
    </form>

    <?php if ($message != "") { ?>
        <p class="message"><?php echo $message; ?></p>
    <?php } ?>

    <a href="login_db.php">Go to Login</a>

    <div class="footer">© Technical 3</div>
</div>

</body>
</html>