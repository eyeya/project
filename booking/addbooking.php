<?php
session_start();
include '../config.php';

if(isset($_POST['addpro'])){
    $id_course = $_POST['id_course']; 
    $id_user = $_POST['id_user']; 
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $status =0;

    $sql1 = "SELECT type FROM course WHERE id = $id_course";
    $result1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_array($result1);
    $type = $row['type'];

    $sql = "INSERT INTO booking (id_course, id_user ,type, name, telephone)
                        VALUES(' $id_course','$id_user','$type','$name','$telephone')";
	$result = mysqli_query($conn, $sql);
    $last_id = mysqli_insert_id($conn); //เพิ่มไอดีล่าสุด ลงใน appointment 
    
    //เมื่อมีการ book มันก็จะต้องมาเพิ่มใน appointment 
    $sql2 = "INSERT INTO appointment (id_booking, id_user, date, time,status)
                        VALUES(' $last_id','$id_user','$date','$time',1)"; //$last_id คือ ไอดีที่เพิ่งเพิ่มมาล่าสุด
    $result = mysqli_query($conn, $sql2); //โดยมีการเพิ่มตารางนัดลง appointment โดย id_booking(FK ของbooking) status 1 คือยังไม่เข้าใช้บริการ

    
    if($result){
        $_SESSION['success'] = "บันทึกข้อมูลสำเร็จ";
        header( "location: ../index.php?Menu=5&Submenu=history" );
    }else{
        $_SESSION['error'] = "บันทึกข้อมูลไม่สำเร็จ";
        header( "location: ../index.php?Menu=5&Submenu=history" );
    }
}
?>