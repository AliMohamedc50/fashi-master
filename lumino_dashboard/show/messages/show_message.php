<?php
    require 'logec_php/connection.php';
$id = $_GET['id'];

$select_message = "SELECT * FROM messages WHERE id = $id" ;
$resulte_message = $conn->query($select_message);
$row_message = $resulte_message->fetch_assoc();


$conn->query("UPDATE `messages` SET view = '1' WHERE id = $id ");


?>

<p>Name: <?=$row_message['name'];?></p>
<p>Email: <?=$row_message['email'];?></p>
<p>Message: <?=$row_message['message'];?></p>
<p>Time: <?=$row_message['m_date'];?></p>
<a href="messages.php" class="btn btn-info">Back</a>