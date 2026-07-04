<?php
$firstName = "";
$middleName = "";
$lastName = "";
$username = "";
$password = "";
$confirmPassword = "";
$birthday = "";
$email = "";
$contactNumber = "";
$message = "";
$showResult = false;

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

    if ($password == $confirmPassword) {
        $showResult = true;
    } else {
        $message = "Password and confirm password are not the same.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }

        .container {
            width: 350px;
            margin: 40px auto;
            background-color:  #f9c0db;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #ff92c5;
        }

        h3 {
            text-align: center;
            font-weight: normal;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 3px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            cursor: pointer;
        }

        .error {
            color: red;
            margin-top: 15px;
            text-align: center;
        }

        .result {
            width: 350px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ff92a9;
        }

        .footer {
            text-align: center;
            margin-top: 15px;
            color: gray;
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
        <input type="text" name="birthday" placeholder="" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Contact Number</label>
        <input type="text" name="contact_number" required>

        <button type="submit">Submit</button>
    </form>

    <div class="footer">© Technical 3</div>

    <?php if ($message != "") { ?>
        <p class="error"><?php echo $message; ?></p>
    <?php } ?>
</div>

<?php if ($showResult) { ?>
    <div class="result">
        <p><b>Full Name:</b> <?php echo $firstName . " " . $middleName . " " . $lastName; ?></p>
        <p><b>Username:</b> <?php echo $username; ?></p>
        <p><b>Password:</b> <?php echo $password; ?></p>
        <p><b>Birthday:</b> <?php echo $birthday; ?></p>
        <p><b>Email:</b> <?php echo $email; ?></p>
        <p><b>Contact Number:</b> <?php echo $contactNumber; ?></p>
    </div>
<?php } ?>

</body>
</html>