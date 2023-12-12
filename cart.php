<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/295e880f12.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/wishlist and cart.css">
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
        <h2>Your Cart</h2>
           
        <?php
            $user_id = '1';

            // Fetch product data from the database
            $query = "SELECT cart.flower_id,flower_name, price, image_path FROM flowers, cart WHERE cart.flower_id = flowers.flower_id AND cart.user_id='$user_id'";
            $result = mysqli_query($connection, $query);
            

            if (mysqli_num_rows($result) > 0) {
                        echo"<table class='table'>";
                            echo"<thead>";
                                echo"<tr>";
                                    echo"<th class='img'>Image</th>
                                    <th class='product'>Product</th>
                                    <th class='price'>Price</th>
                                    <th class='pro-quantity'>Quantity</th>
                                    <th class='pro-subtotal'>Total</th>
                                    <th class='remove'>Remove</th>
                                </tr>";
                            echo"</thead>
                            <tbody>";
    
                    
                    // Display the fetched data in the cart table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td class='img'><img class='img-fluid' src='" . $row['image_path'] . "' alt='Product' /></td>";
                        echo "<td class='product'>" . $row['flower_name'] . "</td>";
                        echo "<td class='price'>\${$row['price']}</td>";
                        echo "<td class='pro-quantity'>";
                        echo"<input class='quantity-input small-width' type='number' value='1' min='0' onchange='updateSubtotal(this, {$row['price']})'></td>";
                        echo "<td class='subtotal'>\${$row['price']}</td>";
                        echo "<td class='remove'>";
                        echo "<form method='post' action='php/remove_from_cart.php'>";
                        echo "<input type='hidden' name='productId' value='" . $row['flower_id'] . "'>";
                        echo "<button type='submit' class='icon' name='removeBtn'><i class='bx bxs-minus-circle'></i></button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";
                    }   
                    echo"</table>";

                    echo" <div id='cart-total'>Total Price: $0</div>";
                    echo" <div class='check-out-btn'><a href='checkout.php'><i class='bx bxs-shopping-bag'></i>Checkout</a></div>"; 




                }

                else {
                    echo"<div class='empty'>";
                    echo"<p>Oops!<br>Your cart is empty. Click below to start shopping.<br><br></p>";
                    echo "<button class='btn' id='btn-empty' onclick=\"window.location.href='home.php'\">Click here</button>";
                    echo"</div>";
                    
                }

                    ?>
                    </div> 
                    

    <?php include('footer.php'); ?>

<script>

        document.addEventListener('DOMContentLoaded', function () {
            // Calculate and set the initial total when the page is loaded
            calculateInitialTotal();

            // Attach event listeners
            const quantityInputs = document.querySelectorAll('input[type="number"]');
            quantityInputs.forEach(input => {
                input.addEventListener('change', function () {
                    const price = parseFloat(this.closest('tr').querySelector('.price').textContent.replace('$', ''));
                    updateSubtotal(this, price);
                });
            });
        });

        function updateSubtotal(input, price) {
            const row = input.closest('tr');
            const quantity = parseInt(input.value);
            const subtotalCell = row.querySelector('.subtotal');
            const subtotal = quantity * price;

            subtotalCell.textContent = `$${subtotal.toFixed(0)}`;

            // Update the total after changing the quantity
            updateTotal();
        }

        function updateTotal() {
            const subtotals = document.querySelectorAll('.subtotal');
            let total = 0;

            subtotals.forEach(subtotal => {
                total += parseFloat(subtotal.textContent.replace('$', ''));
            });

            const cartTotal = document.querySelector('#cart-total');
            cartTotal.textContent = `Total Price: $${total.toFixed(0)}`;
        }

        function calculateInitialTotal() {
            const subtotals = document.querySelectorAll('.subtotal');
            let total = 0;

            subtotals.forEach(subtotal => {
                total += parseFloat(subtotal.textContent.replace('$', ''));
            });

            const cartTotal = document.querySelector('#cart-total');
            cartTotal.textContent = `Total Price: $${total.toFixed(0)}`;
        }
</script>

<script src="js\header.js"></script>
</body>



</html>

