<?php

    include_once '../dbconnect.php';


    if (isset($_POST['send'])) {
        $user_id = '1';
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $phoneno = $_POST['phoneno'];
        $message = $_POST['message'];

            $insertQuery = "insert into message(user_id,fullname,email,subject,phoneno,message) values(?,?,?,?,?,?)";
            $stmt=$connection->prepare($insertQuery);
            $stmt->bind_param("ssssss",$user_id,$fullname,$email,$subject,$phoneno,$message);
            $stmt->execute();
            echo '<script>alert("Send Successfully... 
            Check your email for reply");</script>';
            echo '<script>setTimeout(function() { window.location.href = "../contact-us.php"; }, 100);</script>';
            $stmt->close();
            exit();}  
                

         
    
?>