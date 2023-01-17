<?php
session_start();
include 'config.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "SELECT id_booking FROM appointment WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    $r = mysqli_fetch_assoc($result);
    $id_booking = $r['id_booking'];
    
    $sql1 = "UPDATE appointment SET date = '$date', time = '$time' WHERE id = $id";
    $result1 = mysqli_query($conn,$sql1);

    if($result1){
        $_SESSION['success'] = "บันทึกข้อมูลสำเร็จ";
        header( "location: index.php?Menu=5&Submenu=appointment&id_booking=$id_booking" );
    }else{
        $_SESSION['error'] = "บันทึกข้อมูลไม่สำเร็จ";
        header( "location: index.php?Menu=5&Submenu=appointment&id_booking=$id_booking" );
    }  

}

?>