
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>

    <style>
        body {
            font-family: Arial;
            background-color: #ffedf5;
        }

       
.container {
    width: 500px;
    margin: 80px auto;
    padding: 30px;
    background: #fff8f0;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #4b2e2e;
}

        
label {
    display: block;
    margin-top: 15px;   
    margin-bottom: 8px; 
}


        input {
            width: 100%;
            padding: 6px;
            margin-top: 5px;
            border: 1px solid #000000;
            border-radius: 4px;
        }

        .btn {
            margin-top: 15px;
            width: 100%;
            padding: 8px;
            background: #ff0084;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="container">
    
<h2>✦ ݁˖ Enter your favorite colors ✦ ݁˖</h2>

<form method="POST">

    <label>Favorite Color 1:</label>
    <input type="text" name="color1">

    <label>Favorite Color 2:</label>
    <input type="text" name="color2">

    <label>Favorite Color 3:</label>
    <input type="text" name="color3">

    <label>Favorite Color 4:</label>
    <input type="text" name="color4">

    <label>Favorite Color 5:</label>
    <input type="text" name="color5">

    <input type="submit" name="submit" class="btn" value="Send Colors">

</form>


    <?php
    if (isset($_POST['submit'])) {
       
        $_SESSION['color1'] = $_POST['color1'];
        $_SESSION['color2'] = $_POST['color2'];
        $_SESSION['color3'] = $_POST['color3'];
        $_SESSION['color4'] = $_POST['color4'];
        $_SESSION['color5'] = $_POST['color5'];

        
        header("Location: ResultColors.php");
        exit();
    }
    ?>
</div>

</body>
</html>
