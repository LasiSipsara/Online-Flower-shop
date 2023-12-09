<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
     <!-- box icons -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
     <script src="https://kit.fontawesome.com/295e880f12.js" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="css/contact-us.css">
     <link rel="stylesheet" href="css/header.css">
     <link rel="stylesheet" href="css/footer.css">
</head>
<body>

<?php include('header.php'); ?>



    <section class="con-1" id="con-1">
        <h2 class="heading">Contact Us</h2>
        <p><i>Express your emotions with the language of flowers! Let our expert <br>florists turn your sentiments into a 
        breathtaking bouquet. <br><b>Contact us today to bring beauty and joy to your special moments.<b></i></p>
        <div class="con-1-container">
        <div class="con-1-box">
        <i class='bx bx-walk'></i>
        <h3>Visit Us</h3>
        <h4><b>No.52, Main Street, Aluthgama</b></h4>
        </div>
        
        <div class="con-1-box">
        <i class='bx bxs-phone-call' ></i>
        <h3>Happiness Hotline</h3>
        <h4><b>+94 77 530 8869<b></h4>
        </div>
        
        <div class="con-1-box">
        <i class='bx bxs-envelope'></i>
        <h3>Support Overall</h3>
        <h4><b>enchanterblossoms@gmail.com</b></h4>
        </div>
        </div>

        <!-- <div class="chat-btn">
        <a href="#con-2"><i class='bx bxs-message-rounded-dots' ></i></a>
        </div> -->
        
</section>

        <section class="con-2" id="con-2">
            <h2 class="heading"><b>GET IN TOUCH WITH US!</b></h2>
           
            <form action="php/send-message.php" id="contactForm" method="post">
            <div class="input-box">
                <input type="text" placeholder="Full Name" id="fullname" name="fullname" required>
                <input type="email" placeholder="Email" id="email" name="email" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Subject" id="subject" name="subject" required>
                <input type="text" placeholder="Phone Number" id="phoneno" name="phoneno" required>
            </div>
            <textarea name="message" id="message" cols="30" rows="14" placeholder="Your Message" required></textarea>
            <button type="submit" name="send" id="btn" class="btn">Send Message</button>
            </form>
           
</section>



    <?php include('footer.php'); ?>

    </body>
</html>

