<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginSignup.css">
    <title>Register</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];


            //verifying the unique email
            $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

           //verifying for vallid sri lanka phone number
           $phone = preg_replace("/[^0-9]/", "", $phone);

           $pattern = "/^(?:\+94|0)([1-9][0-9]{8})$/";

    
           if (!preg_match($pattern, $phone)) {
            header('location: register.php?error=incorrect phone number');
           }

        //verifying the confirm password
        if($password !== $confirmPassword){
            header('location: register.php?error=passwords donot match');
        }

         //validating the password
        else if(strlen($password)<5){
            header('location: register.php?error=password must be at least 6 charactors.');
        }
        //verifying the unique email
        else if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
        }
        else{

            mysqli_query($con,"INSERT INTO users(FirstName,LastName,Email,Password,role,address,phone) VALUES('$firstname','$lastname','$email','$password','user','$address','$phone')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }
         
        }else{
         
        ?>

            <header>Sign Up</header>
            <form action="" method="post">
                <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} ?></p>
                <div class="field input">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" autocomplete="off" required>
                </div>
               
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>
            </form>
            <a href="home.php">Back to home</a>
        </div>
        <?php } ?>
      </div>
</body>
</html>