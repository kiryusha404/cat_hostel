<?php
session_start();
$room_id = $_GET['id'];
$cat_db = mysqli_connect("localhost", "root", "root", "cathotel");
if(!$_SESSION['id']){
    echo "<script>window.location.href='../purchase.php'</script>";}else{
    $feed = 'DELETE FROM `feedback` WHERE `feedback`.`id_booking` = '.$room_id.'';
    $data_feed = mysqli_query($cat_db, $feed);
    echo "<script>window.location.href='../purchase.php'</script>";
    }
?>