<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FA3</title>

    <style>

        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            font-size: 28px;
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #ddd;
        }

        .profile-img {
            width: 122px;
            height: 122px;
            object-fit: cover;
        }

        .image-column {
            width: 90px;
        }


        </style>
</head>

<body>

<h2> Personal Information </h2>

    <?php

   $picture = "data:image/svg+xml;utf8,
   <svg xmlns='http://www.w3.org/2000/svg' width='80' height='80'>
   <circle cx='40' cy='25' r='18' fill='black'/>
   <path d='M15 75 C18 50, 62 50, 65 75' fill='black'/>
   </svg>";

   $students = array (


    array("no" => "1","name" => "Armin Arlert", "image" => "https://th.bing.com/th/id/OIP.IyPVsse5n17a5vXKTCi2JwHaHa?r=0&o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3", "age" => 19, "birthday"=> "November 3, 2007", "contact" => "09123456757"),
    array("no" => "2","name" => "Ben Cruz", "image" => "https://images7.alphacoders.com/973/thumb-1920-973246.jpg", "age" => 19, "birthday"=> "February 5, 2007", "contact" => "0457923491"),
    array("no" => "3","name" => "Eren Yeager", "image" => "https://images.saymedia-content.com/.image/t_share/MTc5NjQ1ODEzMTgwNDA5ODE2/the-tragedy-of-eren-yeager-how-the-character-changes-throughout-attack-on-titan.png", "age" => 21, "birthday"=> "September 24, 2005", "contact" => "09325834823"),
    array("no" => "4","name" => "Inosuke Hashibara", "image" => "https://tse2.mm.bing.net/th/id/OIP.veCswZShv6W-uUgtCHNchwHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3", "age" => 20, "birthday"=> "December 6, 2006", "contact" => "09468234912"),
    array("no" => "5","name" => "Levi Ackerman", "image" => "https://avatarfiles.alphacoders.com/375/375291.jpeg", "age" => 30, "birthday"=> "March 30, 1994", "contact" => "035297452822"),
     array("no" => "6","name" => "Megumi Fushigoru", "image" => "https://tse1.mm.bing.net/th/id/OIP.g735MFsezOtqmwQGv7MS9AHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3", "age" => 15, "birthday"=> "December 22, 2009", "contact" => "08253936823"),
    array("no" => "7","name" => "Nanami Kento", "image" => "https://tse1.mm.bing.net/th/id/OIP.X9KCVl3J8tvqsxF0N67yKQHaGB?r=0&w=1200&h=976&rs=1&pid=ImgDetMain&o=7&rm=3", "age" => 27, "birthday"=> "July 3, 1990", "contact" => "09452845383"),
    array("no" => "8","name" => "Nobara Kugisaki", "image" => "https://th.bing.com/th/id/OIP.JbZPkK3obgspbbaeMY1yLQHaHa?r=0&o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3", "age" => 16, "birthday" => "August 7, 2008", "contact" => "09852345286"),
    array("no" => "9","name" => "Yuji Itadori", "image" => "https://tse1.mm.bing.net/th/id/OIP.R_rX0LjRPEI7uzJ2XvCfAQHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3", "age" => 15, "birthday"=> "March 20, 2009", "contact" => "09734562345"),
    array("no" => "10","name" => "Zenitsu Agatsuma", "image" => "https://imagedelivery.net/LBWXYQ-XnKSYxbZ-NuYGqQ/689d5aa3-050d-46f9-cf9c-2624c3f88600/avatarhd", "age" => 16, "birthday"=> "September 3, 2008", "contact" => "097476428745")

   );

   sort($students);

    ?>

    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact Number</th>

</tr>

<?php 
$number = 1;

foreach ($students as $students) {
    echo"<tr>";
    echo"<td>" . $number . "</td>";
    echo"<td>" . $students["name"] . "</td>";
    echo"<td class='image-column'><img class='profile-img' src='" . $students["image"] . "' alt='Profile Image'></td>";
    echo"<td>" . $students["age"] . "</td>";
    echo"<td>" . $students["birthday"] . "</td>";
    echo"<td>" . $students["contact"] . "</td>";
    echo "</tr>";

    $number++;
}

?>
</table>
     
</body>
</html>