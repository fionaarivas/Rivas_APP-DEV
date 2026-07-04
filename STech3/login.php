<?php
session_start();

if (isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}

$static_username = "Nicole2247";
$static_password = "Fionyy2247";

$message = "";

$saved_username = isset($_COOKIE["username"]) ? $_COOKIE["username"] : "";
$saved_password = isset($_COOKIE["password"]) ? $_COOKIE["password"] : "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $static_username && $password == $static_password) {

        if (isset($_POST["remember"])) {
            setcookie("username", $username, time() + 3600);
            setcookie("password", $password, time() + 3600);
        } else {
            setcookie("username", "", time() - 3600);
            setcookie("password", "", time() - 3600);
        }

        $_SESSION["username"] = $username;

        header("Location: home.php");
        exit();

    } else {
        $message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            width: 350px;
            margin: 80px auto;
            background-color: #fec1dc;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #ff7ab6;
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

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 9px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        .remember {
            margin-top: 15px;
        }

        button {
            padding: 9px 20px;
            margin-left: 10px;
            cursor: pointer;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 15px;
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
        <input type="text" name="username" value="<?php echo $saved_username; ?>" required>

        <label>Password</label>
        <input type="password" name="password" value="<?php echo $saved_password; ?>" required>

        <div class="remember">
            <label style="font-weight: normal; display: inline;">
                Remember Me
                <input type="checkbox" name="remember" <?php if ($saved_username != "") echo "checked"; ?>>
            </label>

            <button type="submit">Submit</button>
        </div>
    </form>

    <?php if ($message != "") { ?>
        <p class="error"><?php echo $message; ?></p>
    <?php } ?>

    <div class="footer">© Technical 3</div>
</div>

</body>
</html>