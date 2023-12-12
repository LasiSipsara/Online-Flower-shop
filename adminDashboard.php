
<?php
session_start();
require_once 'dbconnect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/295e880f12.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css\adminDashboard.css">
    <link rel="stylesheet" href="css\adminProducts.css">
</head>

<body>
    <div class="dashboard-container">

        <!-- ===================navigation=================== -->
        <div class="navigation">
            <ul>
                <li>
                    <img src="asset\logo.png" alt="brand logo" style="width:100px;height:60px">
                </li>

                <li>
                    <a href="#" onclick="showContent('dashboard')">
                        <span class="icon">
                            <i class="fa-solid fa-house-chimney"></i>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-user-group"></i>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="showContent('products')">
                        <span class="icon">
                            <i class="fa-brands fa-product-hunt"></i>
                        </span>
                        <span class="title">Products</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-message"></i>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-circle-question"></i>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-gear"></i>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ======================main=========================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </label>
                </div>

                <div class="user">
                    <i class="fa-solid fa-user"></i>
                </div>


            </div>

            <!-- =====================dashboard===================== -->

            <div class="dashboard content " id="dashboard">

                <!-- ========================cards========================= -->
                <div class="card-box">
                    <div class="card">
                        <div>
                            <div class="numbers">1,504</div>
                            <div class="cardName">Daily Views</div>
                        </div>

                        <div class="iconBx">
                            <i class="fa-regular fa-eye"></i>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers">80</div>
                            <div class="cardName">Sales</div>
                        </div>

                        <div class="iconBx">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers">284</div>
                            <div class="cardName">Comments</div>
                        </div>

                        <div class="iconBx">
                            <i class="fa-regular fa-comments"></i>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers">$7,842</div>
                            <div class="cardName">Earning</div>
                        </div>

                        <div class="iconBx">
                            <i class="fa-regular fa-money-bill-1"></i>
                        </div>
                    </div>
                </div>


                <!-- ==========================order details list================= -->

                <div class="details">
                    <div class="recent-orders">
                        <div class="card-header">
                            <h2>Recent Orders</h2>
                            <a href="#" class="view-all-btn">View All</a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>User id</td>
                                    <td>Name</td>
                                    <td>Amount</td>
                                    <td>Price</td>
                                    <td>Payment</td>
                                    <td>Status</td>
                                    <td></td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <ul>
                                            <li>Roses touch</li>
                                            <li>Beauty of hearts</li>
                                            <li>Glory of love</li>
                                            <li>Happy days</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                        </ul>
                                    </td>
                                    <td>20000.00</td>
                                    <td>paid</td>
                                    <td><span class="status pending">pending</span></td>
                                    <td><button class="see-more-btn">See more</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <ul>
                                            <li>Roses touch</li>
                                            <li>Beauty of hearts</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                        </ul>
                                    </td>
                                    <td>3000.00</td>
                                    <td>due</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                    <td><button class="see-more-btn">See more</button></td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>
                                        <ul>
                                            <li>Roses touch</li>
                                            <li>Beauty of hearts</li>
                                            <li>Glory of love</li>
                                            <li>Happy days</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                        </ul>
                                    </td>
                                    <td>20000.00</td>
                                    <td>paid</td>
                                    <td><span class="status return">pending</span></td>
                                    <td><button class="see-more-btn">See more</button></td>
                                </tr>


                            </tbody>
                        </table>

                    </div>


                </div>


            </div>

            <!-- =======================end of dashboard============================ -->


            <!-- =======================start of products=========================== -->
            <div class="products content" id="products">
                <?php
                require_once 'dbconnect.php';
                $editId = "";

                $row3 = array('flower_name' => '', 'price' => '', 'freshness_garanteed' => '');
                if (isset($_GET['edit'])) {
                    $editId = $_GET['edit'];
                    echo "Edit ID: " . $editId;
                    $sql3 = "SELECT flower_name,price,freshness_garanteed from flowers where flower_id=$editId";
                    $result3 = $connection->query($sql3);
                    $row3 = $result3->fetch_assoc();
                }
                ?>


                <!-- =======================product add form========================= -->
                <div class="product-add-container" id="product-add-container">


                    <form action="php\action.adminProducts.php" method="post" enctype="multipart/form-data">
                        <?php

                        if (isset($_GET['message'])) {
                            $message = $_GET['message'];
                            echo '<span class="message">' . $message . '</span>';

                        }
                        ?>
                        <h3>Add a new product</h3>

                        <div class="input-area">
                            <label for="product-name">product name </label>
                            <input type="text" placeholder="product name" name="product-name" class="box"
                                id="product-name" value="<?php echo $row3['flower_name'];  ?>">
                        </div>

                        <div class="input-area">
                            <label for="product-price">product price</label>
                            <input type="number" placeholder="product price" name="product-price" class="box"
                                id="product-price">
                        </div>

                        <div class="input-area">
                            <label for="product-freshness-granted">Freshness granted</label>
                            <input type="text" placeholder="freshness garanteed" name="freshness-garanteed" class="box"
                                id="product-freshness-garanteed">
                        </div>

                        <div class="input-area">
                            <label for="product-category">Product categories</label>
                            <div class="product-category-list">
                                <?php
                                $sql1 = "SELECT * from category";
                                $result = $connection->query($sql1);
                                while ($row = $result->fetch_assoc()) {
                                    echo "<div class='category-area'>";
                                    echo " <input type='checkbox' name='product-category[]'  id='" . $row['c_name'] . "' value=" . $row['c_id'] . " class='checkbox'>";
                                    echo "<label for='" . $row['c_name'] . "' name='category-name' class='category-name'>" . $row['c_name'] . "</label>";
                                    echo "</div>";
                                }
                                ?>

                            </div>

                        </div>

                        <div class="input-area">
                            <label for="product-description">Product Description</label>
                            <input type="textarea" name="product-description" class="box" id="product-description">
                        </div>

                        <div class="input-area">
                            <label for="product-image">Upload the image</label>
                            <input type="file" name="product-image" class="box" id="product-image"
                                accept="image/png, image/jpeg, image/jpg">
                        </div>

                        <input type="submit" class="add btn" name="add-product" value="Add">


                    </form>

                </div>

                <!-- ==============================product update form===================== -->

                <div class="product-add-container" id="product-update-container">


                    <form action="php\action.adminProducts.php?edit= <?php echo $editId; ?>" method="post"
                        enctype="multipart/form-data">
                        <?php

                        if (isset($_GET['message'])) {
                            $message = $_GET['message'];
                            echo '<span class="message">' . $message . '</span>';

                        }
                        ?>





                        <h3>Update Product Details</h3>

                        <div class="input-area">
                            <label for="product-name">product name </label>
                            <input type="text" placeholder="product name" name="product-name" class="box"
                                id="product-name" value="<?php echo $row3['flower_name']; ?>">
                        </div>

                        <div class="input-area">
                            <label for="product-price">product price</label>
                            <input type="number" placeholder="product price" name="product-price" class="box"
                                id="product-price">
                        </div>

                        <div class="input-area">
                            <label for="product-freshness-granted">Freshness granted</label>
                            <input type="text" placeholder="freshness garanteed" name="freshness-garanteed" class="box"
                                id="product-freshness-garanteed">
                        </div>

                        <div class="input-area">
                            <label for="product-category">Product categories</label>
                            <div class="product-category-list">
                                <?php
                                $sql1 = "SELECT * from category";
                                $result = $connection->query($sql1);
                                while ($row = $result->fetch_assoc()) {
                                    echo "<div class='category-area'>";
                                    echo " <input type='checkbox' name='product-category[]'  id='" . $row['c_name'] . "' value=" . $row['c_id'] . " class='checkbox'>";
                                    echo "<label for='" . $row['c_name'] . "' name='category-name' class='category-name'>" . $row['c_name'] . "</label>";
                                    echo "</div>";
                                }
                                ?>

                            </div>

                        </div>

                        <div class="input-area">
                            <label for="product-description">Product Description</label>
                            <input type="textarea" name="product-description" class="box" id="product-description">
                        </div>

                        <div class="input-area">
                            <label for="product-image">Upload the image</label>
                            <input type="file" name="product-image" class="box" id="product-image"
                                accept="image/png, image/jpeg, image/jpg">
                        </div>

                        <div class="update-form-btn-area">
                        <input type="button" class="cancel btn" onclick="cancelUpdate()" value="Cancel">
                        <input type="submit" class="update btn" name="update-product" value=" Update">
                        </div>
                        


                    </form>


                </div>






                <!-- ===================product display area==================== -->


                <?php

                $sql2 = "SELECT * from flowers";
                $result = $connection->query($sql2);

                ?>
                <div class="product-display">
                    <table class="product-display-table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th> Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><img src="<?php echo $row['image_path']; ?>" height="100" alt=""></td>
                                <td>
                                    <?php echo $row['flower_name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['price']; ?>/-
                                </td>
                                <td>
                                    <a href="#products?edit=<?php echo $row['flower_id']; ?>" class="edit btn"
                                        onclick="productEdit()" name="edit-btn"> <i class="fas fa-edit"></i> edit </a>
                                    <a href="#" class="delete btn" onclick="ptoductDelete()"><i class="fas fa-trash"></i>
                                        delete
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>


            </div>
        </div>

    </div>
    <script>
        function showContent(contentId){
            // hide the all content divs

            let contentDivs = document.querySelectorAll('.content');
            contentDivs.forEach(function(div) {
                div.style.display = 'none';
            });

             // Show the selected content div
             document.getElementById(contentId).style.display = 'block';

             var navLinks = document.querySelectorAll('.navigation ul li');
             navLinks.forEach(function(link) {
             link.classList.remove('active');
            });

            // Add 'active' class to the clicked navigation link
             event.target.closest('li').classList.add('active');
        }

             
        

        function productEdit() {
            let addContainer = document.getElementById('product-add-container');
            let updateContainer = document.getElementById('product-update-container');

            addContainer.style.display = 'none';
            updateContainer.style.display = 'block';
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });


        }

        function ptoductDelete() {
            alert("Do you really need to delete the product?");
        }

        function cancelUpdate(){
            let addContainer = document.getElementById('product-add-container');
            let updateContainer = document.getElementById('product-update-container');

            addContainer.style.display = 'block';
            updateContainer.style.display = 'none';
           
        }
    </script>

</body>

</html>