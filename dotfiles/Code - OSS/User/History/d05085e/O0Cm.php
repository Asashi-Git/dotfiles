<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping List</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
            text-align: center;
        }
        img {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Shopping List</h1>
    <ul>
        <?php
        $shoppingList = [
            ["name" => "3 Banana", "image" => "bananes.png"],
            ["name" => "2 Apples", "image" => "bananes.png"],
            ["name" => "1 Milk", "image" => "bananes.png"]
        ];

        foreach ($shoppingList as $item) {
            echo "<li>\n";
            echo "    <p>{$item['name']}</p>\n";
            echo "    <img src=\"{$item['image']}\" alt=\"{$item['name']}\">\n";
            echo "</li>\n";
        }
        ?>
    </ul>
</body>
</html>
