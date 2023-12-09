<?php

require_once '../dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['removeBtn'])) {
    $product_id = $_POST['productId'];
    $user_id='1';

    // Perform the deletion from the wishlist table
    $deleteQuery = "DELETE FROM wishlist WHERE flower_id = '$product_id' AND wishlist.user_id='$user_id'";
    $result = mysqli_query($connection, $deleteQuery);

    if ($result) {
        echo 'Product removed successfully';
        header("Location: ../wishlist.php");
        exit();
    } else {
        echo 'Error removing product from wishlist';
    }
}


else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addToCart'])) {
    // session_start();
    // $productId = $_POST['productId'];
    // $userId = $_SESSION['user_id'];

    $product_id = $_POST['productId'];
    $user_id='1';


    // Check if the product is already in the cart
    $checkQuery = "SELECT * FROM cart WHERE cart.user_id = '$user_id' AND flower_id = '$product_id'";
    $checkResult = $connection->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        // Product is already in the cart, show an alert
        echo "<script>alert('Product is already in the cart');</script>";
        echo "<script>setTimeout(function() { window.location.href = '../wishlist.php'; }, 100);</script>";
    } else {
        // Product is not in the cart, add it to the session and database
        //$_SESSION['cart'][] = $productId;

        // Insert the product into the cart_table
        $insertQuery = "INSERT INTO cart (user_id, flower_id) VALUES ('$user_id', '$product_id')";

        if ($connection->query($insertQuery) === TRUE) {
            // Redirect back to the previous page or wherever you want
            echo "<script>alert('Product added to the cart');</script>";
            echo "<script>setTimeout(function() { window.location.href = '../wishlist.php'; }, 100);</script>";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $connection->error;
        }
    }

    $connection->close();
}
?>
