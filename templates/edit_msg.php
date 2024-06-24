<?php
    require_once("includes/db_connect.php");
    include_once("templates/header.php");
    include_once("templates/nav.php");

    $messageId = mysqli_real_escape_string($conn, $_GET["messageId"]);

    $spot_msg = "SELECT * FROM `messages` WHERE messageId = '$messageId' LIMIT 1";
    $spot_msg_res = $conn->query($spot_msg);
    $spot_msg_row = $spot_msg_res->fetch_assoc();

    if(isset($_POST["update_message"])){
        $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
        $email = mysqli_real_escape_string($conn, $_POST["email_address"]);
        $subject_line = mysqli_real_escape_string($conn, $_POST["subject_line"]);
        $text_message = mysqli_real_escape_string($conn, $_POST["message"]);
        $messageId = mysqli_real_escape_string($conn, $_POST["messageId"]);

        $update_message = "UPDATE messages SET sender_name = '$fullname', sender_email = '$email', subject_line = '$subject_line', message = '$text_message' WHERE messageId='$messageId' LIMIT 1";
      
        if ($conn->query($update_message) === TRUE) {
            header("Location: view_messages.php");
            exit();
        } else {
            echo "Error: " . $update_message . "<br>" . $conn->error;
        }
    }
?>

<div class="header">
    <h1>Update Message</h1>
</div>
        
<div class="row">
    <div class="content">
    <h1>Update Message</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact_form">
        <label for="Fn">Fullname:</label><br>
        <input type="text" name="fullname" id="Fn" placeholder="Fullname" required value="<?php print $spot_msg_row["sender_name"]; ?>"><br><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email_address" placeholder="Email address" required value="<?php print $spot_msg_row["sender_email"]; ?>"><br><br>
        
        <label for="sb">Subject:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="<?php print $spot_msg_row["subject_line"]; ?>"><?php print $spot_msg_row["subject_line"]; ?></option>
            <option value="Email Support">Email Support</option>
            <option value="eLearning Support">eLearning Support</option>
            <option value="AMS Support">AMS Support</option>
        </select>
        <br><br>
    <label for="ms">Message:</label><br>
    <textarea cols="30" rows="7" name="message" id="ms" required><?php print $spot_msg_row["message"]; ?></textarea><br><br>
    <input type="submit" name="update_message" value="Update Message" >
    <input type="hidden" name="messageId" value="<?php print $spot_msg_row["messageId"]; ?>" >
</form>
</div>
<?php include_once("templates/side_bar.php");?>
        </div>      
<?php include_once("templates/footer.php");?>