<?php
session_start();
include 'config.php';

if(isset($_POST['submit'])){
    $id_user = $_POST['id_user'];
    $id_book = $_POST['id_book']; //
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO appointment (id_user, id_booking, date, time, status)VALUES('$id_user', '$id_book', '$date', '$time', 1)";
    $result = mysqli_query($conn,$sql);

    if($result){
        $_SESSION['success'] = "บันทึกข้อมูลสำเร็จ";
        header( "location: index.php?Menu=5&Submenu=appointment&id_booking=$id_book" );
    }else{
        $_SESSION['error'] = "บันทึกข้อมูลไม่สำเร็จ";
        header( "location: index.php?Menu=5&Submenu=appointment&id_booking=$id_book" );
    }

}

?>