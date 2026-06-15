<?php
$fruits = array(
    array(
        "image" => "https://th.bing.com/th/id/OIP.nKkm0wnm9J-Ko2rny3mAzAHaIo?r=0&o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3",
        "name" => "Apple",
        "description" => "Red fruit",
        "facts" => "Apples are rich in fiber and vitamin C. They help support digestion and are commonly eaten fresh or used in desserts."
    ),
    array(
        "image" => "https://tse4.mm.bing.net/th/id/OIP.QGjJCP898VXLFG0t4vtuvgHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3",
        "name" => "Avocado",
        "description" => "Creamy green fruit",
        "facts" => "Avocados contain healthy fats, fiber, and potassium. They are often used in salads, sandwiches, and smoothies."
    ),
    array(
        "image" => "https://i5.walmartimages.com/seo/Fresh-Banana-Fruit-Each_5939a6fa-a0d6-431c-88c6-b4f21608e4be.f7cd0cc487761d74c69b7731493c1581.jpeg",
        "name" => "Banana",
        "description" => "Yellow fruit",
        "facts" => "Bananas are a good source of potassium and energy. They help support muscle function and are commonly eaten as a quick snack."
    ),
    array(
        "image" => "https://png.pngtree.com/thumb_back/fh260/background/20230730/pngtree-a-group-of-grapes-hanging-from-a-branch-image_10225332.jpg",
        "name" => "Grapes",
        "description" => "Small round fruit",
        "facts" => "Grapes are small juicy fruits that contain antioxidants. They can be eaten fresh, dried as raisins, or used to make juice"
    ),
    array(
        "image" => "https://i.pinimg.com/736x/de/ca/26/deca2637085532fbc14782acaa78619a.jpg",
        "name" => "Mango",
        "description" => "Sweet tropical fruit",
        "facts" => "Mangoes are sweet tropical fruits rich in vitamin C and vitamin A. They are often eaten fresh, blended into shakes, or used in desserts."
    ),
    array(
        "image" => "https://healthjade.com/wp-content/uploads/2017/10/orange-fruit.jpg",
        "name" => "Orange",
        "description" => "Citrus fruit",
        "facts" => "Oranges are known for being rich in vitamin C. They help support the immune system and are commonly eaten fresh or made into juice."
    ),
    array(
        "image" => "https://www.dreamfoodscaribe.com/wp-content/uploads/2024/07/papaya-fruit.webp",
        "name" => "Papaya",
        "description" => "Soft orange fruit",
        "facts" => "Papayas contain vitamin C, fiber, and an enzyme called papain. They help support digestion and are often eaten ripe as a sweet fruit."
    ),
    array(
        "image" => "https://cdn.pixabay.com/photo/2020/04/29/12/47/pineapple-5108775_1280.jpg",
        "name" => "Pineapple",
        "description" => "Tropical fruit",
        "facts" => "Pineapples are tropical fruits rich in vitamin C and bromelain. They have a sweet and tangy taste and are used in juices, desserts, and dishes."
    ),
    array(
        "image" => "https://th.bing.com/th/id/OIP.7KZqxNgIMhm6DuwOGeza2gHaHa?r=0&o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3",
        "name" => "Strawberry",
        "description" => "Small red fruit",
        "facts" => "Strawberries are sweet red fruits rich in vitamin C and antioxidants. They are commonly used in desserts, smoothies, and salads."
    ),
    array(
        "image" => "https://th.bing.com/th/id/OIP.g8RW-IpoPefaAhzJGtLG0gHaFV?r=0&o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3",
        "name" => "Watermelon",
        "description" => "Large juicy fruit",
        "facts" => "Watermelon has a high water content, which helps keep the body hydrated. It is sweet, refreshing, and commonly eaten during hot weather."
    )
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity 1 - Fruit</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 95%;
            margin: auto;
            border-collapse: collapse;
        }

        th, td {
            border: 2px solid black;
            padding: 10px;
            text-align: center;
            vertical-align: middle;
        }

        th {
            background-color: #ff95c7;
        }

        .table-title {
            font-size: 22px;
            font-weight: bold;
        }

        img {
            width: 130px;
            height: 130px;
            object-fit: cover;
        }

        .facts {
            line-height: 1.5;
        }
    </style>
</head>

<body>

    <h2>Activity 1: Fruit</h2>

    <table>
        <tr>
            <th colspan="4" class="table-title">My Fruits</th>
        </tr>

        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>

        <?php foreach ($fruits as $fruit) { ?>
            <tr>
                <td>
                    <img src="<?php echo $fruit['image']; ?>" alt="<?php echo $fruit['name']; ?>">
                </td>
                <td><?php echo $fruit['name']; ?></td>
                <td><?php echo $fruit['description']; ?></td>
                <td class="facts"><?php echo $fruit['facts']; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>