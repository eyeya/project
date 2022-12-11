<?php
include '../config.php';
$sql = "SELECT booking.id,booking.telephone,booking.date AS booking_date,booking.time AS booking_time,user.name,user.lastname,course.name AS name_course,promotion.name AS name_promotion FROM booking LEFT JOIN course ON booking.id_course = course.id LEFT JOIN promotion ON booking.id_promotion = promotion.id LEFT JOIN user ON booking.id_user = user.id;";
$result =  mysqli_query($conn, $sql);
$num_row = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>

<body>
  <style>

  </style>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h2>ข้อมูลการจอง</h2>
        </div>

        <div class="card-body">

        <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger" role="alert">
              <?php
              echo $_SESSION['error'];
              unset($_SESSION['error']);
              ?>
            </div>
          <?php } ?>
          <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
              <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
              ?>
            </div>
          <?php } ?>
          <table class="table table-striped">
            <!-- <table class="w3-table-all w3-card-4"> -->
            <tr>
              <!-- //ใช้เชื่อมกับตารางuser ผู้จอง
              //ใช้ชื่อคอร์ส  ตารางคอร์ส -->
              <th width="10%">รหัส</th>
              <th>ชื่อผู้จอง</th>
              <th>ชื่อคอร์ส</th>
              <th>ชื่อโปรโมชั่น</th>
              <th>วันที่จอง</th>
              <th width="10%">แก้ไข</th>
              <th width="10%">ลบ</th>
            </tr>
            <?php
            $i = 1;
            // echo $num_row;
            if ($num_row > 0) {

              while ($row = mysqli_fetch_array($result)) {
                $newDate = date("d-m-Y", strtotime($row['booking_date']));
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $row['name'].' '.$row['lastname'] ?></td>
              <td><?php 
              if($row['name_course'] == NULL){
                echo '-';
              }else{
                echo $row['name_course']; 
              }
              ?>
              </td>
              <td><?php 
              if($row['name_promotion'] == NULL){
                echo '-';
              }else{
                echo $row['name_promotion']; 
              }
              ?></td>
              <td><?php echo $newDate.' | '.$row['booking_time'] ?></td>
              <td><a href="admin.php?Menu=4&Submenu=editbook"><button type="button" class="btn btn-warning">แก้ไข</button></td>
              <td><button type="button" class="btn btn-danger">ลบ</button></td>
            </tr>
            <?php $i++;
              }
            } else { ?>
              <tr>
                <td>ไม่พบข้อมูล</td>
              </tr>
            <?php } ?>
            
          </table>
        </div>
      </div>
    </div>
  </div>


</body>

</html>