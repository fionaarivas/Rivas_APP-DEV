<!DOCTYPE html>
<html>
<head>
    <title>String Function in PHP</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #2b211d;
        }

        .container {
            width: 90%;
            margin: 50px auto;
            background-color: #ffeff7;
            padding: 30px;
            box-sizing: border-box;
            box-shadow: 0 8px 25px rgba(0,0,0,0.10);
        }

        h1 {
            text-align: center;
            font-family: Georgia, 'Times New Roman', serif;
            color: #4a2f25;
            letter-spacing: 2px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            margin-top: 25px;
        }

        th, td {
            border: 1px solid #6b4b3e;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #ff6aba;
            color: #3b2432;
        }

        tr:nth-child(even) {
            background-color: #ffa3d0;
        }

        .title-row {
            background-color: #ffd7e7;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>List of Names</h1>

    <?php

    $names = array(
        "mikasa Ackerman",
        "miguel garcia",
        "megumi Fushigiro",
        "hanako Yam",
        "nanami Kento",
        "satoru Gojo",
        "levi Ackerman",
        "penguin Diaz",
        "yuji Itadori",
        "jz Boiz",
        "haze Cruz",
        "giyu Tomioka",
        "fiona Frost",
        "zayden Balentines",
        "arthur Nathan",
        "remy Walker",
        "claude Faul",
        "bruce Wayne",
        "dennis Sidney",
        "damien Desmond"
    );

    ?>

    <table>
        <tr>
            <td colspan="6" class="title-row">List of Names</td>
        </tr>

        <tr>
            <th>Name</th>
            <th>Number of Characters</th>
            <th>Uppercase First Character</th>
            <th>Replace Vowels with @</th>
            <th>Check Position of Character "a"</th>
            <th>Reverse Name</th>
        </tr>

        <?php

        foreach ($names as $name) {
            $numberOfCharacters = strlen($name);
            $uppercaseFirst = ucfirst($name);
            $replaceVowels = str_replace(
                array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U"),
                "@",
                $name
            );

            $positionA = strpos($name, "a");

            if ($positionA === false) {
                $positionA = "No letter a";
            }

            $reverseName = strrev($name);

            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$numberOfCharacters</td>";
            echo "<td>$uppercaseFirst</td>";
            echo "<td>$replaceVowels</td>";
            echo "<td>$positionA</td>";
            echo "<td>$reverseName</td>";
            echo "</tr>";
        }

        ?>

    </table>

</div>

</body>
</html>