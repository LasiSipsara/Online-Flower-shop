<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Preview</title>
    <link rel="stylesheet" href="css/admin-message.css">
</head>

<body>

    <!-- Header section ends -->

    <h2>Customers' Messages</h2>
    <?php
    require_once 'dbconnect.php';
    

            $query = "SELECT fullname, email, message.subject, phoneno, message.message FROM message";
            $result = mysqli_query($connection, $query);
            

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <div class='msg-box-container'>
                        <div class='msg-box'>
                            <h3>". $row['subject'] . "</h3>
                            <h4>Customer Name : " . $row['fullname'] . "</h4>
                            <h4>Email : <a href='mailto:" . $row['email'] . "'>" . $row['email'] . "</a></h4>
                            <h4>Phone Number : <a href='tel:" . $row['phoneno'] . "'>" . $row['phoneno'] . "</a></h4>
                            <h4>Message : " . $row['message'] . "</h4>
                        </div>
                    </div>";


            }
        }









                ?>


</body>
</html>