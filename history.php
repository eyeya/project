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
              <th width="20%" >ชื่อ</th>
              <th width="20%">ราคา</th>
              <th width="20%">ประเภท</th>
              <th width="20%">วันที่จอง</th>
              <th width="10%">ครั้งที่</th>
              <th width="30%">นัดหมาย</th>
            </tr>
          </thead>
            <?php
            $user = $_SESSION['user_login'];
            // $sql = "SELECT booking.id,course.name AS name_course,course.price,course.type,appointment.date,appointment.time,appointment.status FROM booking LEFT JOIN appointment on booking.id = appointment.id_booking LEFT JOIN course on booking.id_course = course.id WHERE booking.id_user = $user ORDER BY booking.id DESC;";
            $sql = "SELECT booking.id,course.name AS name_course,course.price,course.type,appointment.date,appointment.time FROM booking LEFT JOIN appointment on booking.id = appointment.id_booking LEFT JOIN course on booking.id_course = course.id WHERE booking.id_user = '$user' GROUP BY appointment.id_booking ORDER BY booking.id DESC;";
            // $sql = "SELECT * FROM booking WHERE id_user = $user;";
            $result =  mysqli_query($conn, $sql);
            $num_row = mysqli_num_rows($result);
            $i = 1;
            if ($num_row > 0) {
              while ($row = mysqli_fetch_array($result)) {
                $id_course = $row['id_course'];
                $id_booking = $row['id'];
                
            ?>
          <tbody>
            <tr>
              <td class="text-center"><?= $i ?></td>
              <td ><?=$row['name_course'] ?></td>
              <td ><?=$row['price'] ?></td>
              <td ><?php 
              if($row['type'] == 1){
                echo 'คอร์ส';
              }else{
                echo 'โปรโมชั่น';
              }
              ?></td>
              <td>
                <?php 
                
                // $sql3 = "SELECT MAX(id),date FROM appointment WHERE id_booking = $id_booking ";
                // $result3 =  mysqli_query($conn, $sql3);
                // $row3 = mysqli_fetch_assoc($result3);
                // echo DBThaiDate($row3['date']);

                echo DBThaiDate($row['date']).'  '.TimeThai($row['time']);
                ?>
              </td>

              <td><?php 
              $sql2 = "SELECT COUNT(appointment.id) AS total_app FROM appointment LEFT JOIN booking on appointment.id_booking = booking.id WHERE appointment.id_user = $user AND appointment.id_booking = $id_booking AND appointment.status = 2";
              $result2 = mysqli_query($conn,$sql2);
              $row2 = mysqli_fetch_assoc($result2);
              $total_app = $row2['total_app'];
              
              if($row['type'] == 2){
                  echo $total_app.' / 10 ครั้ง';
              }else{
                echo $total_app.' ครั้ง';
              }
              ?></td>


              <!-- <td class="text-center"><?php 
              if($row['type'] == 1){
                echo '';
              }else{?>
                <a href="index.php?Menu=5&Submenu=appointment&id_booking=<?php echo $id_booking?>" class="btn btn-success btn-sm">นัดหมาย</a>
              <?php } ?>
              </td> -->
              <td class="text-center"> 
             
                <a href="index.php?Menu=5&Submenu=appointment&id_booking=<?php echo $id_booking?>" class="btn btn-success btn-sm">นัดหมาย</a>
             
              </td>
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
