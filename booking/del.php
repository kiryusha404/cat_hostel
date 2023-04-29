<?php
session_start();
$cat_db = mysqli_connect("localhost", "root", "root", "cathotel");
$room_id = $_GET['id'];
if($_SESSION['status'] != 'admin'){
    echo "<script>window.location.href='index.php'</script>";}else{
        $pushdb = 'UPDATE `booking_room` SET `status` = "refused" WHERE `booking_room`.`id_booking` = '.$room_id.';';
        $inpu = mysqli_query($cat_db, $pushdb);
       echo "<script>window.location.href='../admin.php'</script>";
    }
?>