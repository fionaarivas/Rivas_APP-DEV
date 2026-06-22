
<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5e6d3;
        }

       
.container {
    width: 500px;
    margin: 50px auto;
    padding: 30px; 
    background-color: #fff8f0;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

form {
    margin-bottom: 25px; 
}

h2 {
    color: #4b2e2e;
    margin-bottom: 15px;
}

label {
    display: block;
    margin-top: 15px;  
    margin-bottom: 5px;
    color: #5c3a21;
}


.title {
    text-align: center;
}


.row {
    display: flex;
    gap: 28px; 
    margin-bottom: 10px; 
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    border: 2px solid #b08968;
    border-radius: 5px;
    margin-bottom: 10px; 
}

.btn {
    margin-top: 15px;
    padding: 8px;
    width: 100%;
    background-color: #6b4226;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.result {
    margin-top: 25px;
    padding: 20px; 
    border: 1px solid #b08968;
    border-radius: 6px;
    background-color: #fdf6ee;
}


        h4 {
            margin: 5px 0;
            font-weight: normal;
        }
    </style>

</head>
<body>

<div class="container">

    <h2 class="title">Personal Information</h2>

    <h2>GET Form</h2>
    <form method="GET">

        <label>Name</label>
        <div class="row">
            <div>
                <small>First Name</small>
                <input type="text" name="fname">
            </div>
            <div>
                <small>Last Name</small>
                <input type="text" name="lname">
            </div>
        </div>

        <label>Middle Name</label>
        <input type="text" name="mname">

        <label>Date of Birth</label>
        <input type="text" name="dob">

        <label>Address</label>
        <input type="text" name="address">

        <input type="submit" name="submit_get" class="btn" value="Submit GET">
    </form>

   
    <h2 style="margin-top:30px;">POST Form</h2>
    <form method="POST">

        <label>Name</label>
        <div class="row">
            <div>
                <small>First Name</small>
                <input type="text" name="fname">
            </div>
            <div>
                <small>Last Name</small>
                <input type="text" name="lname">
            </div>
        </div>

        <label>Middle Name</label>
        <input type="text" name="mname">

        <label>Date of Birth</label>
        <input type="text" name="dob">

        <label>Address</label>
        <input type="text" name="address">

        <input type="submit" name="submit_post" class="btn" value="Submit POST">
    </form>

    <?php
    if (isset($_GET['submit_get'])) {
        echo "<div class='result'>";
        echo "<h3>GET Result:</h3>";
        echo "<h4>First Name: " . $_GET['fname'] . "</h4>";
        echo "<h4>Middle Name: " . $_GET['mname'] . "</h4>";
        echo "<h4>Last Name: " . $_GET['lname'] . "</h4>";
        echo "<h4>Date of Birth: " . $_GET['dob'] . "</h4>";
        echo "<h4>Address: " . $_GET['address'] . "</h4>";
        echo "</div>";
    }

    if (isset($_POST['submit_post'])) {
        echo "<div class='result'>";
        echo "<h3>POST Result:</h3>";
        echo "<h4>First Name: " . $_POST['fname'] . "</h4>";
        echo "<h4>Middle Name: " . $_POST['mname'] . "</h4>";
        echo "<h4>Last Name: " . $_POST['lname'] . "</h4>";
        echo "<h4>Date of Birth: " . $_POST['dob'] . "</h4>";
        echo "<h4>Address: " . $_POST['address'] . "</h4>";
        echo "</div>";
    }
    ?>

</div>

</body>
</html>
