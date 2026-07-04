<?php
session_start();
require_once __DIR__ . "/db.php";

if (isset($_SESSION["user_id"])) {
    header("Location: home_db.php");
    exit();
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];

            header("Location: home_db.php");
            exit();
        } else {
            $message = "Invalid username or password.";
        }
    } else {
        $message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login with Database</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            width: 380px;
            margin: 80px auto;
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
            margin-top: 15px;
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
            margin-top: 25px;
            cursor: pointer;
        }

        .message {
            text-align: center;
            color: red;
            margin-top: 15px;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: gray;
        }
    </style>
</head>

<body>

<div class="container">
    <h3>Log-In Form</h3>

    <form method="POST" action="">
        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <?php if ($message != "") { ?>
        <p class="message"><?php echo $message; ?></p>
    <?php } ?>

    <div class="footer">© Technical 3</div>
</div>

</body>
</html>