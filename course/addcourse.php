<?php
session_start();
include '../config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price_course = $_POST['price_course'];
    $price_promotion = $_POST['price_promotion'];
    $details = $_POST['details'];
    $image = $_FILES['image'];

    $upload_dir = "upload/";
    $fileName = $_FILES['image']['name'];
    $uploaded_file = $upload_dir.$fileName;    

    if(move_uploaded_file($_FILES['image']['tmp_name'],$uploaded_file)){
        //insert file information into db table
        //ทำการเพิ่มข้อมูล
		$sql = "INSERT INTO course (name, price_course,price_promotion, details, image)
                        VALUES('$name','$price_course','$price_promotion','$details','$fileName')";
		$result = mysqli_query($conn, $sql);
    } 

    
    if($result){
        $_SESSION['success'] = "ลบข้อมูลสำเร็จ";
        header( "location: ../admin.php?Menu=2&Submenu=indexco" );
    }else{
        $_SESSION['error'] = "ลบข้อมูลไม่สำเร็จ";
        header( "location: ../admin.php?Menu=2&Submenu=indexco" );
    }
}
?>