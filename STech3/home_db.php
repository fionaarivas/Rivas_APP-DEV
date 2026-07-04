<?php
session_start();
require_once __DIR__ . "/db.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: login_db.php");
    exit();
}

$userId = $_SESSION["user_id"];
$message = "";

/* Get user information */
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $userId);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

/* Reset Password */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $reEnterPassword = $_POST["re_enter_password"];

    if (!password_verify($currentPassword, $user["password"])) {
        $message = "Current password is not the same with the old password.";
    } elseif ($newPassword != $reEnterPassword) {
        $message = "New password and Re-Enter new password should be the same.";
    } else {
        $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $updateSql = "UPDATE users SET password = ? WHERE id = ?";
        $updateStmt = mysqli_prepare($conn, $updateSql);
        mysqli_stmt_bind_param($updateStmt, "si", $hashedNewPassword, $userId);

        if (mysqli_stmt_execute($updateStmt)) {
            $message = "Password reset successful.";
        } else {
            $message = "Password reset failed.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            width: 430px;
            margin: 50px auto;
            background-color: #ffc1dc;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #ff5aa5;
        }

        h2 {
            margin-top: 0;
            text-align: center;
            font-weight: normal;
        }

        .logout {
            float: right;
            color: blue;
        }

        .info {
            margin-top: 30px;
            line-height: 1.7;
        }

        hr {
            margin: 25px 0;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            box-sizing: border-box;
        }

        button {
            width: 70%;
            padding: 10px;
            margin: 20px auto 0;
            display: block;
            cursor: pointer;
        }

        .message {
            text-align: center;
            font-weight: bold;
            margin-top: 15px;
            color: red;
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
    <h2>User Information Form</h2>

    <a class="logout" href="logout_db.php">Log-out</a>

    <div class="info">
        <p><b>Welcome</b> 
            <?php echo htmlspecialchars($user["first_name"] . " " . $user["middle_name"] . " " . $user["last_name"]); ?>
        </p>

        <p><b>Birthday:</b> <?php echo htmlspecialchars($user["birthday"]); ?></p>

        <p><b>Contact Details</b></p>
        <p><b>Email:</b> <?php echo htmlspecialchars($user["email"]); ?></p>
        <p><b>Contact:</b> <?php echo htmlspecialchars($user["contact_number"]); ?></p>
    </div>

    <hr>

    <h4>RESET PASSWORD</h4>

    <form method="POST" action="">
        <label>Enter Current Password:</label>
        <input type="password" name="current_password" required>

        <label>Enter New Password:</label>
        <input type="password" name="new_password" required>

        <label>Re-Enter New Password:</label>
        <input type="password" name="re_enter_password" required>

        <button type="submit">Reset Password</button>
    </form>

    <?php if ($message != "") { ?>
        <p class="message"><?php echo $message; ?></p>
    <?php } ?>

    <div class="footer">© Technical 3</div>
</div>

</body>
</html>