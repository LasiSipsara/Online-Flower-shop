<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/user_profile.css">
    <link rel="stylesheet" href="css/header and footer.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-pzjw8znTBEi5F0MjGTa3WxNHuKpNj30CdlpebN9Vr6hO4b6Shn4pDVi7yD2GrnHf" crossorigin="anonymous">

</head>
<body>
    <!-- Header section start -->
    <?php
    include_once 'header.php';
    ?>

    <!-- Header section ends -->


    <div class="account-page">
        <div class="profile">
            <div class="profile-detail">
            <?php
                require_once "dbconnect.php";
                $userID='';
                if(isset($_SESSION['valid'])){
                    $userID=$_SESSION['user_id'];
                }

                // Check for success parameter
                $successMessage = isset($_GET['success']) && $_GET['success'] === 'true' ? 'User data updated successfully!' : '';

                // Retrieve user details from the database
                $sql = "SELECT * FROM users WHERE id = $userID";
                $result = $connection->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                    $firstname = $row["Firstname"];
                    $lastname = $row["Lastname"];
                    $email = $row["Email"];
                    $address = $row["address"];
                    $phone =$row["phone"];
                } else {
                    echo "User not found";
                }?>
                <img src="asset\profile.png">
                <h2><?php echo $firstname. " " .$lastname; ?></h2>
                <p><?php echo strtolower($email); ?></p>
            </div>
            <ul>
                <li class="options active" data-option="myAccount" onclick="showContent('myAccount')">My Account<span>></span></li>
                <li class="options" data-option="changePassword" onclick="showContent('changePassword')">Change Password<span>></span></li>
                <li class="options" data-option="myOrders" onclick="showContent('myOrders')">My Orders<span>></span></li>
                <li class="options" data-option="deleteAccount" onclick="showContent('deleteAccount')">Delete Account<span>></span></li>
            </ul>
        </div>

        <section class="display">
        </section>

        
        <div class="account-detail">

            <div id="myAccount">
                <h2>My Account</h2>

                <form class= "user-data-form" action="php/actions.user_profile.php" method="post">

                    <div class="user-data">
                        <label for="Firstname">Firstname:</label>
                        <input type="text" id="Firstname" name="Firstname" value="<?php echo $firstname; ?>" required><br>
                    </div>

                    <div class="user-data">
                        <label for="Lastname">Lastname:</label>
                        <input type="text" id="Lastname" name="Lastname" value="<?php echo $lastname; ?>" required><br>
                    </div>

                    <div class="user-data">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo strtolower($email); ?>" required><br>
                    </div>

                    <div class="user-data">
                        <label for="Address">Address:</label>
                        <input type="text" id="Address" name="Address" value="<?php echo $address; ?>" ><br> 
                    </div>

                    <div class="user-data">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>" required><br>
                    </div>

                    <input id="submit-btn" type="submit" value="Update">

                    <?php echo $successMessage; ?>
                </form>
            </div>

            <div id="changePassword" class="hidden">
                <h2>Change Password</h2>
                
                <form class= "user-data-form" action="php/actions.user_profile.php" method="post">

                    <div class="user-data">
                        <label for="Current-Password">Current Password:</label>
                        <input type="text" id="Current-Password" name="Current-Password" value="" required><br>
                    </div>

                    <div class="user-data">
                        <label for="New-Password">New Password:</label>
                        <input type="text" id="New-Password" name="New-Password" value="" required><br>
                    </div>

                    <div class="user-data">
                        <label for="Confirm-Password">Confirm Password:</label>
                        <input type="text" id="Confirm-Password" name="Confirm-Password" value="" required><br>
                    </div>

                    <input id="submit-btn" type="submit" value="Change Password">

                    <!-- <?php echo $successMessage; ?> -->
                </form>
            </div>

            <div id="myOrders" class="hidden">
                <h2>My Orders</h2>
                <!-- Add content for My Orders here -->
            </div>

            <div id="deleteAccount" class="hidden">
                <h2>Delete Account</h2>
                <!-- Add content for Delete Account here -->
            </div>
            

        </div>
        
        
    </div>

    <script>
    // Show "My Account" by default
    document.getElementById('myAccount').classList.remove('hidden');

    function showContent(option) {
        // Hide all content divs
        var allContent = document.querySelectorAll('.account-detail > div');
        allContent.forEach(function (content) {
            content.classList.add('hidden');
        });

        // Remove the 'active' class from all options
        var allOptions = document.querySelectorAll('.options');
        allOptions.forEach(function (opt) {
            opt.classList.remove('active');
        });

        // Show the selected content and mark the option as active
        var selectedContent = document.getElementById(option);
        selectedContent.classList.remove('hidden');

        var selectedOption = document.querySelector('.options[data-option="' + option + '"]');
        selectedOption.classList.add('active');
    }
</script>

    <script src="https://kit.fontawesome.com/295e880f12.js" crossorigin="anonymous"></script>

    <?php
    include_once ('Footer.php');
    ?>
       <script src="js\header.js"></script>
</body>
</html>