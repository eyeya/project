<?php
include 'format_date.php';
// $sql = "SELECT booking.id,booking.telephone,booking.date AS booking_date,booking.time AS booking_time,user.name,user.lastname,course.name AS name_course,promotion.name AS name_promotion FROM booking LEFT JOIN course ON booking.id_course = course.id LEFT JOIN promotion ON booking.id_promotion = promotion.id LEFT JOIN user ON booking.id_user = user.id;";
// $result =  mysqli_query($conn, $sql);
// $num_row = mysqli_num_rows($result);
if(isset($_REQUEST['id_booking'])){
  $id_booking = $_REQUEST['id_booking'];
}
if(isset($_REQUEST['today'])){
  $today = date("y-m-d");
}

$sql = "SELECT appointment.id,appointment.id_user,appointment.id_booking,appointment.date,appointment.time,appointment.status";
$sql .= " FROM appointment";
$sql .= " LEFT JOIN booking on appointment.id_booking = booking.id ";
if($id_booking){
  $sql .= " WHERE appointment.id_booking = $id_booking ";
}
if($today){
  $sql .= " WHERE appointment.date = $today ";
}
$sql .= " ORDER BY appointment.date ASC ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
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
          <h2>ตารางนัดหมาย</h2>
        </div>

        <div class="card-body">
          <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="admin.php?Menu=4&Submenu=indexappointment" method="" style="margin-left:60%">
              <!-- <button class="btn btn-outline-primary btn-sm" type="submit" value="1" name="today">วันนี้</button> -->
              <input class="form-control mr-sm-2" type="search"  aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">ค้นหารายชื่อ</button>
            </form>
          </nav>
            <table class="table table">
                <thead class="table-active">
                    <tr>
                        <th scope="col" class="text-center ">ครั้งที่</th>
                        <th scope="col" class="text-center">วันที่นัด</th>
                        <th scope="col" class="text-center">เวลานัด</th>
                        <th scope="col" class="text-center">สถานะ</th>
                        <th scope="col" class="text-center">แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;
                while($row = mysqli_fetch_assoc($result)){
                    $bookid = $row['id'];
                ?>
                    <tr>   
                    <th scope="row" class="text-center"><?= $i ?></th>
                        <td class="text-center"><?= $row['date'] ?></td>
                        <td class="text-center"><?= $row['time'] ?></td>
                        <td class="text-center ">
                            <?php  if($row['status'] == 1){
                                echo '<span class="text-warning font-weight-bold">ยังไม่เข้าใช้บริการ</span>';
                            }else{
                                echo '<span class="text-success font-weight-bold">เข้าใช้บริการแล้ว</span>';
                            }
                            ?>
                        </td>
                        <td class="text-center"> 
                        
                        <button type="button" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#edit" 
                        data-id="<?= $row['id'] ?>" 
                        data-date="<?= $row['date'] ?>"
                        data-time="<?= $row['time'] ?>"
                        data-id_book="<?php echo $id_book ?>"
                        onclick="$('#id').val($(this).data('id')); 
                        $('#date').val($(this).data('date'));
                        $('#time').val($(this).data('time'));
                        $('#id_book').val($(this).data('id_book'));
                        $('#edit').modal('show');">แก้ไข</button>
                        </td>

                    </tr>
                    <?php $i++;} ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>


</body>

</html>