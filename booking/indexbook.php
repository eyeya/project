<?php
include 'format_date.php';
// $sql = "SELECT booking.id,booking.telephone,booking.date AS booking_date,booking.time AS booking_time,user.name,user.lastname,course.name AS name_course,promotion.name AS name_promotion FROM booking LEFT JOIN course ON booking.id_course = course.id LEFT JOIN promotion ON booking.id_promotion = promotion.id LEFT JOIN user ON booking.id_user = user.id;";
// $result =  mysqli_query($conn, $sql);
// $num_row = mysqli_num_rows($result);
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
          <table class="table table">
          <thead class="">
            <tr>
              <th class="text-center" width="8%">#</th>
              <th width="20%" >ชื่อ</th>
              <th width="20%">ชื่อผู้จอง</th>
              <th width="20%">เบอร์โทร</th>
              <th width="20%">วันที่จอง</th>
              <th width="30%">ครั้งที่</th>
              <th width="30%">แก้ไข</th>
              <th width="30%">ลบ</th>
            </tr>
          </thead>
            <?php
            include 'config.php';
            $sql = "SELECT * FROM booking ";
            $result =  mysqli_query($conn, $sql);
            $num_row = mysqli_num_rows($result);
            $i = 1;
            if ($num_row > 0) {
              while ($row = mysqli_fetch_array($result)) {
                $id_course = $row['id_course'];
            ?>
          <tbody>
            <tr>
            <td><?=$i ?></td>
            <td><?php 
              if($row['type'] == 2){
                  echo 'โปรโมชั่น';
              }else{
                echo 'คอร์ส' ;
              }
              ?></td>
              <td><?=$row['name'] ?></td>
              <td><?=$row['telephone'] ?></td>
              
              <td><?php echo DBThaiDate($row['date']).' <br> '.TimeThai($row['time']); ?></td>
              <td class="text-center" ><?php 
              if($row['type'] == 2){
                  echo $row['status'].' / 10 ครั้ง';
              }else{
                echo $row['status'].' ครั้ง';
              }
              ?></td>

              <td><a href="?Menu=4&Submenu=editbook&id=<?php echo $row['id'] ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
              <td><a href="booking/del_book.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('ต้องการลบข้อมูลหรือไม่?');">ลบ</a></td>
            
            </tr>
            <?php $i++;} } ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>


</body>

</html>