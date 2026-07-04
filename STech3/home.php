<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            width: 400px;
            margin: 100px auto;
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #ff7ab6;
            text-align: center;
        }

        h2 {
            font-weight: normal;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: white;
            background-color: #ff7ab6;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #ff4f9f;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>You are successfully logged in using session.</p>

    <a href="logout.php">Logout</a>
</div>

</body>
</html>