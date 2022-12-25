<?php
session_start();
include 'config.php';
include 'format_date.php';
?>
<!DOCTYPE html>
<html>
  <header>
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
  </header>

<body>
  <style>
.history{
  padding-top: 20px;
  padding-left: 30px;
  padding-right: 30px;
  padding-bottom: 150px;
}
.table .thead-dark th td{
  text-align: center;

}
  </style>
  
  <div class="history">
   <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h2 align="center">ประวัติการจอง</h2>
        </div>

        <div class="card-body">

        <table class="table ">
          <thead class="thead-dark">
            <tr>
              <th class="text-center" width="8%">ครั้งที่</th>
              <th width="20%" >ชื่อคอร์ส</th>
              <th width="20%">ราคาคอร์ส</th>
              <th width="20%">ราคาโปรโมชั่น</th>
              <th width="20%">วันที่จอง</th>
              <th width="30%">ครั้งที่</th>
            </tr>
          </thead>
            <?php
            $user = $_SESSION['user_login'];
            $sql = "SELECT * FROM booking WHERE id_user = '$user' ORDER BY id DESC";
            $result =  mysqli_query($conn, $sql);
            $num_row = mysqli_num_rows($result);
            $i = 1;
            if ($num_row > 0) {
              while ($row = mysqli_fetch_array($result)) {
                $id_course = $row['id_course'];
                $id_promotion = $row['id_promotion'];
            ?>
          <tbody>
            <tr>
              <td class="text-center"><?= $i ?></td>
              <td><?php 
              if($row['id_course']!= NULL){
                $sql1 = "SELECT course.name FROM course LEFT JOIN booking ON booking.id_course = course.id WHERE course.id = '$id_course'";
                $result1 =  mysqli_query($conn, $sql1);
                $r1 = mysqli_fetch_assoc($result1);

                echo $r1['name'];
              }else if($row['id_promotion']!= NULL){
                $sql2 = "SELECT course.name FROM course LEFT JOIN booking ON booking.id_promotion = course.id WHERE course.id = '$id_promotion'";
                $result2 =  mysqli_query($conn, $sql2);
                $r2 = mysqli_fetch_assoc($result2);

                echo $r2['name'];
              }else{
                echo '';
              }
              
              ?></td>
              <td><?php 
              if($row['id_course']!= NULL){
                $sql3 = "SELECT course.price_course FROM course LEFT JOIN booking ON booking.id_course = course.id WHERE course.id = '$id_course'";
                $result3 =  mysqli_query($conn, $sql3);
                $r3 = mysqli_fetch_assoc($result3);

                echo $r3['price_course'];
              }else{
                echo '-';
              }
              
              ?></td>
              <td><?php 
              if($row['id_promotion']!= NULL){
                $sql4 = "SELECT course.price_promotion FROM course LEFT JOIN booking ON booking.id_promotion = course.id WHERE course.id = '$id_promotion'";
                $result4 =  mysqli_query($conn, $sql4);
                $r4 = mysqli_fetch_assoc($result4);

                echo $r4['price_promotion'];
              }else{
                echo '-';
              }
              
              ?></td>
              <td><?php echo DBThaiDate($row['date']).'  '.TimeThai($row['time']); ?></td>
              <td class="text-center" ><?php 
              if($row['id_promotion']){
                  echo $row['status'].' / 10 ครั้ง';
              }else{
                echo $row['status'].' ครั้ง';
              }
              ?></td>
            </tr>
            <?php $i++;} } ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>
