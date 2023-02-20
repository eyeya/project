<?php
include 'format_date.php';
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
                <th class="text-center" width="8%">ลำดับ</th>
                <th width="20%">ชื่อรายการจอง</th>
                <th width="20%">ชื่อผู้จอง</th>
                <th width="20%">เบอร์โทร</th>
                <th width="20%">วันที่จอง</th>
                <th width="30%">ครั้งที่</th>
                <th width="20%">แก้ไข</th>
                <th width="20%">ลบ</th>
                <th width="10%">นัดหมาย</th>
              </tr>
            </thead>
            <?php
            include 'config.php';
            $sql = "SELECT booking.id,course.name AS name_course,course.type,appointment.date,appointment.time,booking.name,booking.telephone FROM booking LEFT JOIN appointment on booking.id = appointment.id_booking LEFT JOIN course on booking.id_course = course.id GROUP BY appointment.id_booking ORDER BY booking.id DESC;";
            $result =  mysqli_query($conn, $sql);
            $num_row = mysqli_num_rows($result);
            $i = 1;
            if ($num_row > 0) {
              while ($row = mysqli_fetch_array($result)) {
                $id_course = $row['id_course'];
                $id_booking = $row['id']; //ไอดีการจองนัดๆ 
            ?>
                <tbody>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?php
                        if ($row['type'] == 2) {
                          echo 'โปรโมชั่น';
                        } else {
                          echo 'คอร์ส';
                        }
                        ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['telephone'] ?></td>

                    <td><?php echo DBThaiDate($row['date']) . ' <br> ' . TimeThai($row['time']); ?></td>
                    <td><?php
                        $sql2 = "SELECT COUNT(appointment.id) AS total_app FROM appointment INNER JOIN booking on appointment.id_booking = booking.id WHERE appointment.id_booking = $id_booking AND appointment.status = 2";
                        $result2 = mysqli_query($conn, $sql2);
                        $row2 = mysqli_fetch_assoc($result2);
                        $total_app = $row2['total_app']; //รวมแถวมาคำนวณ count appointment.id

                        if ($row['type'] == 2) {
                          echo $total_app . ' / 10 ครั้ง';
                        } else {
                          echo $total_app . ' / 1 ครั้ง';
                        }
                        ?></td>

                    <td><a href="?Menu=4&Submenu=editbook&id=<?php echo $row['id'] ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                    <td><a href="booking/del_book.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('ต้องการลบข้อมูลหรือไม่?');">ลบ</a></td>
                    <td><a href="?Menu=4&Submenu=indexappointment&id_booking=<?php echo $row['id'] ?>" class="btn btn-success btn-sm">นัดหมาย</a></td>
                  </tr>
              <?php $i++;
              }
            } ?>
                </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


</body>

</html>