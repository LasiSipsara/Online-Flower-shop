
<!-- php for product add form -->

<?php
require_once '../dbconnect.php';
if (isset($_POST['add-product'])) {
    $product_name = trim($_POST['product-name']);
    $product_price = trim($_POST['product-price']);
    $freshness_garanteed = trim($_POST['freshness-garanteed']);
    $product_category="";
    if(isset($_POST['product-category'])){
        $product_category = $_POST['product-category'];
    }
   
    $product_description = trim($_POST['product-description']);
    $product_image = $_FILES['product-image']['name'];
    $product_image_tmp_name = $_FILES['product-image']['tmp_name'];
    $product_image_folder = '../asset/products/' . $product_image;
    $product_image_database_path='asset/products/' . $product_image;
   
   $message='';
    if (empty($product_name) || empty($product_price) || empty($freshness_garanteed) || empty($product_category) || empty($product_description) || empty($product_image)) {
        $message = 'please fill out all';
        header("Location:../adminDashboard.php#products?message='$message'");
        exit();
    } else {
        $sql1 = "INSERT INTO flowers(flower_name, price,`freshness garanteed`,description,image_path) VALUES('$product_name', $product_price, '$freshness_garanteed','$product_description','$product_image_database_path')";
        $upload = mysqli_query($connection, $sql1);
        if ($upload) {
            $sql2 = "SELECT flower_id from flowers order by flower_id desc limit 1";
            $result = $connection->query($sql2);
            $row = $result->fetch_assoc();
            $flower_id = $row['flower_id'];
            foreach ($product_category as $category_id) {
                $sql3 = "INSERT INTO `flower category`(flower_id,c_id) VALUES($flower_id,$category_id)";
                $insert = mysqli_query($connection, $sql3);
            }
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            $message = 'new product added successfully';
            header("Location:../adminDashboard.php#?message='$message'");
            exit();
        } else {
            $message = 'could not add the product';
            header("Location:../adminDashboard.php#products?message='$message'");
            exit();
        }


    }


}
if(isset($_GET['delete'])){
    $delete_flower_id=$_GET['delete'];
    $sql2="DELETE from `flower category` where flower_id=$delete_flower_id";
    $result2=$connection->query($sql2);
    if($result2){
        $sql3="DELETE from flowers where flower_id=$delete_flower_id";
        $result3=$connection->query($sql3);
        header("Location:../adminDashboard.php#products");
        exit();
    }else{
        echo"Error in deletion";
    }

}





?>
