<?php
session_start();
include '../config.php';

if(isset($_POST['addpro'])){
    $id_promotion = $_POST['id_promotion'];
    $id_user = $_POST['id_user'];
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $status =0;

    $sql = "INSERT INTO booking (id_promotion, id_user, name, telephone, date, time,status)
                        VALUES(' $id_promotion','$id_user','$name','$telephone','$date','$time','$status')";
	$result = mysqli_query($conn, $sql);
    
    // if($result){
    //     $_SESSION['success'] = "บันทึกข้อมูลสำเร็จ";
    //     header( "location: ../index.php?Menu=5&Submenu=history" );
    // }else{
    //     $_SESSION['error'] = "บันทึกข้อมูลไม่สำเร็จ";
    //     header( "location: ../index.php?Menu=5&Submenu=history" );
    // }
}
?>