
<?php
session_start();
require_once'../dbconnect.php';


if(isset($_GET['wishlist'])){
    $wishlist_id=$_GET['wishlist'];
    if(isset($_SESSION['valid'])){
        $user_id=$_SESSION['user_id'];
        $sql1="SELECT * from wishlist where flower_id=$wishlist_id AND user_id=$user_id";
        $result=$connection->query($sql1);
        $row=$result->fetch_assoc();
        if($row==0){
            $sql2="INSERT INTO wishlist(flower_id,user_id)values($wishlist_id,$user_id)";
            $result=$connection->query($sql2);
            header("Location:../wishlist.php");
        }else{
            header("Location:../home.php");
        }
       

    }else{
        header("Location:../login.php");
    }
}

if(isset($_GET['cart'])){
    $cart_id=$_GET['cart'];
    if(isset($_SESSION['valid'])){
        $user_id=$_SESSION['user_id'];
        $sql1="SELECT * from cart where flower_id=$cart_id AND user_id=$user_id";
        $result=$connection->query($sql1);
        $row=$result->fetch_assoc();
        if($row==0){
            $sql2="INSERT INTO cart(flower_id,user_id)values($cart_id,$user_id)";
            $result=$connection->query($sql2);
            header("Location:../cart.php");
        }else{
            header("Location:../home.php");
        }

    }else{
        header("Location:../login.php");
    }
}

?>
