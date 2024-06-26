<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Details</title>
    <link rel="stylesheet" href="css/header and footer.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css\item_details.css">
    <!-- <link rel="stylesheet" href="css\home.css"> -->
    

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-pzjw8znTBEi5F0MjGTa3WxNHuKpNj30CdlpebN9Vr6hO4b6Shn4pDVi7yD2GrnHf" crossorigin="anonymous">

</head>

<body>
    <!-- header -->
    <?php
    include_once ('header.php');
    ?>
    <!-- header ends here -->

    <!-- banner area -->
    <section class="details-banner"> 
        <div class="details-title">
            Product Details
        </div>   
    </section>
    <!-- banner ends here -->

    <!-- single product area start -->
    <section id="prodetails" class="section1">
        <div class="single-pro-image">

            <?php
                require_once 'dbconnect.php';
                $flower_id='';
                if (isset($_GET['flowerId'])) {
                    $flower_id = $_GET['flowerId'];
                }

                $sql1 = "SELECT * from flowers where flower_id = $flower_id";
                $result1 = $connection->query($sql1);
                $row= $result1->fetch_assoc();
                echo "<img src='" . $row['image_path'] . "' alt='' width='100%' id='MainImg'>";
   
            ?>

            <!-- <div class="small-img-group">
                <div class="small-img-col">
                    <img src="asset\products\aura of affection.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="asset\products\in your heart.jpeg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="asset\products\sincere embrace.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="asset\products\sensous blue romance.jpeg" width="100%" class="small-img" alt="">
                </div>
            </div> -->
        </div>

        <div class="single-pro-details">
            <?php

                    echo "<h3>" . $row['flower_name'] . "</h3>
<<<<<<< HEAD
                    <div class='price'><h5>$" . $row['price'] . "</h5></div>
=======
                    <div class='price'><h5>LKR. " . $row['price'] . ".00</h5></div>
>>>>>>> 9f4c43f2956bd8541f56398d44bc4f18cdd54191
                    <div class='more-details'>
                        <div class= 'description'>". $row['description']."</div>
                        <div class='days'><h6>Freshness garanteed :</h6> " .$row['freshness garanteed'] . "</div>
                    </div>";
                
            ?>

            <input type="number" value="1" min="0">
            </br>
            <div class="cart-icons">
                <?php
                echo "<a href='php\actions.home.php?cart=".$row['flower_id']. "' class='cart-btn'>Add to cart</a>
                <a href='php\actions.home.php?wishlist=".$row['flower_id']. "' class='fas fa-heart' id='heart'></a> ";
                ?>
            </div>
            <a href='#' class='buy-btn'>Buy Now</a>   
        </div>
    </section>
    <!-- single product area end -->
    
    <!-- similar products area start -->
    <section id="similar-products" class="section-pro">
        <p>Other Products</p>
        <div class="item-cards-container">
                <?php

                 $sql1 = "SELECT * from flowers WHERE flower_id != $flower_id limit 4";


                $result1 = $connection->query($sql1);


                while ($row = $result1->fetch_assoc()) {
                    echo "<div class='item-card'>
                    <div class='flower-image'>";
                    echo "<img src='" . $row['image_path'] . "'alt='" . $row['flower_name'] . "'>";

                    echo "<div class='item-card-icons'>
                    <a href='php\actions.home.php?wishlist=".$row['flower_id']. "' class='fas fa-heart' id='heart2'></a> 
                    <a href='php\actions.home.php?cart=".$row['flower_id']. "' class='cart-btn'>Add to cart</a>
                    
                    </div>
                    </div>";

                    echo " <div class='item-card-content'>
                    <h3>" . $row['flower_name'] . "</h3>
                    <div class='price'>$" . $row['price'] . "</div>
                    </div>
                    </div>";
                }
                ?>

            </div>

        </div>
        <!-- end of product area -->

    </div>
        
    </section>
    <?php
        require_once 'dbconnect.php';
    ?>

    <script src="https://kit.fontawesome.com/295e880f12.js" crossorigin="anonymous"></script>

    <?php
    include_once ('Footer.php');
    ?>
       <script src="js\header.js"></script>
</body>
</html>






