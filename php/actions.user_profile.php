<?php

session_start();

require_once "../dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $userID = ''; 
    
    if(isset($_SESSION['valid'])){
        $userID=$_SESSION['user_id'];
    }

    $firstname = $_POST["Firstname"];
    $lastname = $_POST["Lastname"];
    $email = $_POST["email"];
    $address = $_POST["Address"];
    $phone = $_POST["phone"];

    // Update user details in the database using prepared statement
    $sql = "UPDATE users SET Firstname=?, Lastname=?, Email=?, address=?, phone=? WHERE id=?";
    $stmt = $connection->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssssi", $firstname, $lastname, $email, $address, $phone, $userID);
        $stmt->execute();

        echo "User data updated successfully";
        header("Location: ../user_profile.php?userID=$userID&success=true");
        // header("Location: user_profile.php?userID=$userID&success=true");
        exit();

        $stmt->close();
    } else {
        echo "Error updating user data: " . $connection->error;
    }
}

$connection->close();
?>
