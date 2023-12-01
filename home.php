<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/295e880f12.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css\home.css">
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\footer.css">

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



    <!-- Home banner section starts -->

    <section class="home-banner" id="home-banner">
        <div class="banner-content">
            <h3>Fresh Flowers</h3>
            <span>Natural and beauty flowers</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Corrupti corporis nemo provident voluptate, iure asperiores
                in incidunt quaerat enim obcaecati?</p>
            <a href="#product-area" class="btn">Shop now</a>

        </div>

    </section>
    <!-- Home banner section ends -->



    <!-- start of about us section -->
    <section class="about" id="about">

         <h1 class="heading">About Us</h1>
        <div class="row">

            <div class="video-container">
                <video src="asset\production_id_4811932 (1080p).mp4" loop autoplay muted></video>
                <h3>Best flower sellers</h3>
            </div>
            <div class="content">
                <h3>Why choose us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora et voluptas nulla reprehenderit suscipit fugiat perferendis obcaecati! Quis dolore commodi non, corrupti doloribus numquam laudantium voluptates, enim illo voluptas fuga culpa quaerat et saepe tempora sit ab obcaecati minus facere! Ipsa exercitationem ad aspernatur, ex architecto adipisci pariatur. Fugit iusto quod mollitia ipsam quo maiores corrupti reiciendis? Itaque, ut consectetur!</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto facilis vel aliquam repudiandae quam a assumenda autem ea. Ipsum laudantium non dolores voluptate repellat est nulla blanditiis a iste accusantium?</p>
                 <a href="#" class="btn">Contact us</a>
            </div>

        </div>
    </section>


    <!-- end of about us section -->






    <!-- home products section starts -->

    <div class="home-products-topic">
        <h3 class="topic">Our Products</h3>
    </div>


    <div class="product-area" id="product-area">

        <!-- starts of category list div -->
        <div class="category-list">

            <div class="selection-types">
                <ul>
                    <li>
                        <a href="home.php?cid=0#product-area">All</a>
                    </li>
                </ul>

            </div>

            <div class="select-by-category">
                <div class="selection-topic">
                    <h3 class="topic"> Filter By Category</h3>

                </div>
                <div class="selection-types">
                    <?php
                    $sql2 = "SELECT * from category";
                    $result2 = $connection->query($sql2);
                    echo "<ul>";
                    while ($row = $result2->fetch_assoc()) {
                        echo "<li class='type'><a href='home.php?cid=" . $row['c_id'] . "#product-area'>" . $row['c_name'] . "</a>";
                        echo "</li>";
                    }

                    echo "</ul>";

                    ?>
                </div>
            </div>


            <div class="order-by-price">
                <div class="selection-topic">
                    <h3 class="topic"> Order By Price</h3>
                </div>

                <div class="selection-types">
                    <ul>
                        <li><a href="home.php?cid=-1#product-area">High TO Low</a></li>
                        <li><a href="home.php?cid=-2#product-area">Low To High</a></li>
                    </ul>
                </div>

            </div>

        </div>

        <!-- end of category list div -->


        <!-- start of product area -->

        <div class="home-products">

            <div class="item-cards-container">
                <?php
                $sql1 = "SELECT * from flowers";
                if (isset($_GET['cid'])) {
                    $categoryId = $_GET['cid'];
                    if ($categoryId == 0) {
                        $sql1 = "SELECT * from flowers";
                    }

                    if ($categoryId == -1) {
                        $sql1 = "SELECT * from flowers ORDER BY price DESC";
                    }
                    if ($categoryId == -2) {
                        $sql1 = "SELECT * from flowers ORDER BY price ASC";
                    }

                    if ($categoryId > 0) {
                        $sql1 = "SELECT * from flowers f join `flower category` c on f.flower_id=c.flower_id WHERE c.c_id=$categoryId";
                    }


                }


                $result1 = $connection->query($sql1);


                while ($row = $result1->fetch_assoc()) {
                    echo "<div class='item-card'>
                 <div class='flower-image'>";
                    echo "<img src='" . $row['image_path'] . "'alt='" . $row['flower_name'] . "'>";

                    echo "<div class='item-card-icons'>
                  <a href='#' class='fas fa-heart'></a> 
                  <a href='#' class='cart-btn'>Add to cart</a>
                  </div>
                  </div>";

                    echo " <div class='item-card-content'>
                   <h3>" . $row['flower_name'] . "</h3>
                   <div class='price'>" . $row['price'] . ".00</div>
                   </div>
                   </div>";
                }
                ?>

            </div>

        </div>
        <!-- end of product area -->

    </div>





    <!-- home products section ends -->

    <?php
    include_once 'Footer.php';
    ?>
</body>

</html>