
<?php

 session_start();
require_once '../dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['removeBtn'])) {
    $productId = $_POST['productId'];

    $user_id = '';
    if(isset($_SESSION['valid'])){
        $user_id=$_SESSION['user_id'];
    }
    // Perform the deletion from the cart table
    $deleteQuery = "DELETE FROM cart WHERE flower_id='$productId' AND user_id='$user_id'";
    $result = mysqli_query($connection, $deleteQuery);

    if ($result) {
        echo 'Product removed successfully';
        header("Location: ../cart.php");
        exit();
    } else {
        echo 'Error removing product from cart';
    }
}
?>