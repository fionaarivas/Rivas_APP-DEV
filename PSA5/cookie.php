
<!DOCTYPE html>
<html>
<head>
    <title>Cookie Personal Information</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f5e6d3;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            padding: 25px;
            background: #fff8f0;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 8px;
            margin-bottom: 12px;
            border: 1px solid #ff94bf;
            border-radius: 5px;
        }

        .btn {
            background: rgba(255, 159, 197, 0.86);
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            cursor: pointer;
        }

        .result {
            margin-top: 15px;
            padding: 10px;
            background: #fdf6ee;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Cookie Personal Information</h2>

    <form method="POST">
        First Name:
        <input type="text" name="fname">

        Middle Name:
        <input type="text" name="mname">

        Last Name:
        <input type="text" name="lname">

        <input type="submit" name="submit" class="btn" value="Set Cookies">
    </form>

<?php
if (isset($_POST['submit'])) {
    
    setcookie("fname", $_POST['fname'], time() + 10); 
    setcookie("mname", $_POST['mname'], time() + 20); 
    setcookie("lname", $_POST['lname'], time() + 30); 

    echo "<div class='result'>Cookies have been set!<br>";
    echo "Wait a few seconds then refresh the page.</div>";
}


if (isset($_COOKIE['fname']) || isset($_COOKIE['mname']) || isset($_COOKIE['lname'])) {
    echo "<div class='result'>";
    echo "<h3>Stored Cookies:</h3>";

    if (isset($_COOKIE['fname'])) {
        echo "First Name: " . $_COOKIE['fname'] . "<br>";
    }

    if (isset($_COOKIE['mname'])) {
        echo "Middle Name: " . $_COOKIE['mname'] . "<br>";
    }

    if (isset($_COOKIE['lname'])) {
        echo "Last Name: " . $_COOKIE['lname'] . "<br>";
    }

    echo "</div>";
}
?>

</div>

</body>
</html>

