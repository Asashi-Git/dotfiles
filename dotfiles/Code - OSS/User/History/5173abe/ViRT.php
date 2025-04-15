<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="script" href="script.php">
    <title>Shopping List</title>
</head>

<body>
    <header></header>
    <main>
        <ul>
            <?php foreach ($shoppingList as $index => $item): ?>
                <li>
                    <?= htmlspecialchars($item) ?>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="remove" value="<?= $index ?>">
                        <button type="submit" style="background:none;border:none;color:red;cursor:pointer;">Remove</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>

        <form method="POST">
            <input type="text" name="item" placeholder="Add another item" required>
            <button type="submit">Add Product</button>
        </form>
    </main>
    <footer></footer>
</body>

</html>
