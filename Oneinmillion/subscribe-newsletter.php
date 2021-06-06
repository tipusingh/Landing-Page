<?php
 
    $conn = mysqli_connect("localhost", "u780791672_onen", "Root@619", "u780791672_onem");
    $subscriberEmail = $_POST["subscriberEmail"];
 
    mysqli_query($conn, "INSERT INTO subscribers (email) VALUES ('$subscriberEmail')");
 
?>