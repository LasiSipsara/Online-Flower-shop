<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist Page</title>
    <link rel='stylesheet' href='css/wishlist and cart.css'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/295e880f12.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <!-- Header section start -->
    <?php
    include_once 'header.php';
    ?>

    <!-- Header section ends -->

    <?php
    require_once 'dbconnect.php'
    ?>
    <div class="container">
    <h2 class="heading">WishList</h2>

    <?php
                    
                    $user_id = '1';
                    // Fetch product data from the database
                    $query = "SELECT flowers.flower_id,flower_name, price, image_path FROM flowers, wishlist WHERE wishlist.flower_id = flowers.flower_id AND wishlist.user_id='$user_id'";
                    $result = mysqli_query($connection, $query);
                    
                    //check if the wishlist is empty
                    if (mysqli_num_rows($result) > 0) {
        
                        echo"<table class='table'>";
                            echo"<thead>";
                                echo"<tr>";
                                    echo"<th class='img'>Image</th>
                                    <th class='product'>Product</th>
                                    <th class='price'>Price</th>
                                    <th class='add-cart'>Add to Cart</th>
                                    <th class='remove'>Remove</th>
                                </tr>";
                            echo"</thead>";
                            echo"<tbody>";
                    
                    // Display the fetched data in the cart table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td class='img'><img class='img-fluid' src='" . $row['image_path'] . "' alt='Product' /></td>";
                        echo "<td class='product'>" . $row['flower_name'] . "</td>";
                        echo "<td class='price'>$" . $row['price'] . "</td>";
                        echo "<td class='add-cart'>";
                        echo "<form method='post' action='php/wishlist-actions.php'>";
                        echo "<input type='hidden' name='productId' value='" . $row['flower_id'] . "'>";
                        echo "<button type='submit' class='btn' name='addToCart'>Add to Cart</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "<td class='remove'>";
                        echo "<form method='post' action='php/wishlist-actions.php'>";
                        echo "<input type='hidden' name='productId' value='" . $row['flower_id'] . "'>";
                        echo "<button type='submit' class='icon' name='removeBtn'><i class='bx bxs-minus-circle'></i></button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    
                    echo"</table>";
                }

                else {
                    echo"<div class='empty-wishlist'>";
                    echo"<p>Oops!<br>Your wishlist is empty. Click below to start shopping.<br><br></p>";
                    echo "<button class='btn' id='btn' onclick=\"window.location.href='main.php'\">Click here</button>";
                    echo"</div>";
                }

                    ?>

                    </div>

    </div>
    <?php include('footer.php'); ?>
</body>
</html>