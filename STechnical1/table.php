<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>

     <style> 
    table {
        border-collapse: collapse;
        margin: 0 auto;
        font-size: 25px;

    }

    td {
        border: 1px solid black;
        padding: 15px;
        text-align: center;
        width: 30px;
        height:30px;

    }

    .lightpink {
        background-color: lightpink;
    }

    .peachpuff {
        background-color: peachpuff;
    }

    h1 {
        text-align: center;
    }

    </style>
</head>
<body>
    <h1>Multiplication Table</h1>

<table>
    <?php 
    for($row = 0; $row <= 10; $row++) {
        echo "<tr>";
        
        for($col = 0; $col <=10; $col++) {
            $answer = $row *$col;

            if($col % 2 == 0) {
                echo "<td class = 'lightpink'>$answer</td>";  
            }else{
                echo "<td class = 'peachpuff'>$answer</td>";
            }
        }
        echo"</tr>";
    } 
    
    ?>
</table>
</body>
</html>