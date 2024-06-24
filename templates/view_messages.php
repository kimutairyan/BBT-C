<?php
    require_once("includes/db_connect.php");
    include_once("templates/header.php");
    include_once("templates/nav.php");

    if(isset($_GET["DelId"])){
        $DelId = mysqli_real_escape_string($conn, $_GET["DelId"]);
        
        // sql to delete a record
        $del_msg = "DELETE FROM `messages` WHERE messageId='$DelId' LIMIT 1";
        
        if ($conn->query($del_msg) === TRUE) {
            header("Location: view_messages.php");
            exit();
        } else {
        echo "Error deleting record: " . $conn->error;
        }
    }

    ?>
<div class="header">
    <h1>Messages</h1>
</div>
        
<div class="row">
    <div class="content">

    <h1>Messages</h1>
    <p>Lorem ipsum dolor sit amet, laborum</p>
    <table>
        <thead>
            <tr>
                <th colspan="2">Full Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
<?php
$select_msg = "SELECT * FROM `messages` ORDER BY datecreated DESC";
$sel_msg_res = $conn->query($select_msg);
$cm=0;
if ($sel_msg_res->num_rows > 0) {
  // output data of each row
  while($sel_msg_row = $sel_msg_res->fetch_assoc()) {
    $cm++;
?>
        <tr>
            <td><?php print $cm; ?>.</td>
            <td><?php print $sel_msg_row["sender_name"]; ?></td>
            <td><?php print $sel_msg_row["sender_email"]; ?></td>
            <td><?php print '<strong>' . $sel_msg_row["subject_line"] .'</strong> - ' . substr($sel_msg_row["message"], 0, 25) . '...' ?></td>
            <td><?php print date("d-M-Y H:i", strtotime($sel_msg_row["datecreated"])); ?></td>
            <td>[ <a href="edit_msg.php?messageId=<?php print $sel_msg_row["messageId"]; ?>">Edit</a> ] [ <a href="?DelId=<?php print $sel_msg_row["messageId"]; ?>">Del</a> ]</td>
        </tr>
<?php
  }
} else {
  echo "0 results";
}
?>
</tbody>
        <thead>
            <tr>
                <th>SN</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Time</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>
</div>
<?php include_once("templates/side_bar.php");?>
        </div>      
<?php include_once("templates/footer.php");?>