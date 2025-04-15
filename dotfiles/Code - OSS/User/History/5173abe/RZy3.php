<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
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

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve existing list from cookies or create an empty array
    $shoppingList = isset($_COOKIE['shopping_list']) ? json_decode($_COOKIE['shopping_list'], true) : [];

    // Add new item to the list if it exists
    if (isset($_POST['item']) && !empty(trim($_POST['item']))) {
        $shoppingList[] = htmlspecialchars(trim($_POST['item'])); // Sanitize input
    }

    // Remove an item if requested
    if (isset($_POST['remove']) && isset($shoppingList[$_POST['remove']])) {
        unset($shoppingList[$_POST['remove']]);
        $shoppingList = array_values($shoppingList); // Reindex the array
    }

    // Save the updated list back to cookies
    setcookie('shopping_list', json_encode($shoppingList), time() + (86400 * 30), "/"); // Cookie valid for 30 days

    // Redirect back to avoid form resubmission
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Retrieve the list to display
$shoppingList = isset($_COOKIE['shopping_list']) ? json_decode($_COOKIE['shopping_list'], true) : [];
?>

