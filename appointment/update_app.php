<?php
session_start();
include_once '../config.php';

if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "UPDATE appointment SET date='$date',time='$time' WHERE id = '$id' ";
    $result = mysqli_query($conn,$sql);

    if($result){
        $_SESSION['success'] = "แก้ไขข้อมูลสำเร็จ";
        header( "location: ../admin.php?Menu=4&Submenu=indexappointment" );
    }else{
        $_SESSION['error'] = "แก้ไขข้อมูลไม่สำเร็จ";
        header( "location: ../admin.php?Menu=4&Submenu=indexappointment" );
    }
}

if(isset($_POST['approve'])){
    $approve = $_POST['approve'];
    $id = $_POST['id'];

    $sql = "UPDATE appointment SET status='$approve' WHERE id = '$id' ";
    $result = mysqli_query($conn,$sql);

    if($result){
        $_SESSION['success'] = "แก้ไขข้อมูลสำเร็จ";
        header( "location: ../admin.php?Menu=4&Submenu=indexappointment" );
    }else{
        $_SESSION['error'] = "แก้ไขข้อมูลไม่สำเร็จ";
        header( "location: ../admin.php?Menu=4&Submenu=indexappointment" );
    }
}
?>