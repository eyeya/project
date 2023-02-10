<?php
include 'format_date.php';

// $sql = "SELECT booking.id,booking.telephone,booking.date AS booking_date,booking.time AS booking_time,user.name,user.lastname,course.name AS name_course,promotion.name AS name_promotion FROM booking LEFT JOIN course ON booking.id_course = course.id LEFT JOIN promotion ON booking.id_promotion = promotion.id LEFT JOIN user ON booking.id_user = user.id;";
// $result =  mysqli_query($conn, $sql);
// $num_row = mysqli_num_rows($result);

if(isset($_REQUEST['id_booking'])){
  $id_booking = $_REQUEST['id_booking']; //id จากตารางการจองเรียกมาเป็นคนๆ ตรงนัดหมาย
}
if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];  // id ของหน้า appointment
}
if(isset($_REQUEST['today'])){$today = date("Y-m-d");}
if(isset($_REQUEST['status'])){$status = 1;}
if(isset($_REQUEST['submit'])){$search = $_REQUEST['search'];}
if(isset($_REQUEST['id'])){$id = $_REQUEST['id'];}else{$id = '';}


$sql = "SELECT booking.id_course,user.name,user.lastname,appointment.id,appointment.id_user,appointment.id_booking,appointment.date,appointment.time,appointment.status";
$sql .= " FROM appointment";
$sql .= " LEFT JOIN booking on appointment.id_booking = booking.id ";
$sql .= " LEFT JOIN user on user.id = appointment.id_user ";
if($id_booking){
  $sql .= " WHERE appointment.id_booking = $id_booking ";
}
if($today){
  $sql .= " WHERE appointment.date = '$today' ";
}
if($status){
  $sql .= " WHERE appointment.status = '$status' ";
}
if($search){
  $sql .= " WHERE user.name LIKE '%$search%' OR user.lastname LIKE '%$search%'  ";
}
if($id){
  $sql .= " WHERE appointment.id LIKE '%$id%' ";
}
$sql .= " ORDER BY appointment.date ASC ";
// echo $sql;
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
echo $num;
?>
<!DOCTYPE html>
<html>

<body>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h2>ตารางนัดหมาย</h2>
        </div>

        <div class="card-body">
          <nav class="navbar navbar-light ">
            <form class="form-inline" action="" method="POST">
                <button class="btn btn-outline-dark  m-1 " type="submit" ><i class="fa fa-repeat"></i></button>
                <button class="btn btn-outline-primary  m-1 " type="submit" value="1" name="today">วันนี้</button>
                <button class="btn btn-outline-primary  m-1 " type="submit" value="1" name="status">ยังไม่เข้าใช้บริการ</button>
             
            </form>
            <form class="form-inline" action="" method="POST">
              <input type="text" name="search" class="form-control" placeholder="กรอกชื่อ - นามสกุล">
              <button class="btn btn-success m-1" type="submit" name="submit" >ค้นหา</button>
            </form>
          </nav>
            <table class="table table">
                <thead class="table-active">
                    <tr>
                        <th scope="col" class="text-center ">ลำดับ</th>
                        <th scope="col" class="text-center">ชื่อผู้จอง</th>
                        <th scope="col" class="text-center">ชื่อรายการจอง</th>
                        <th scope="col" class="text-center">วันที่นัด</th>
                        <th scope="col" class="text-center">เวลานัด</th>
                        <th scope="col" class="text-center">สถานะ</th>
                        <th scope="col" class="text-center">แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $i=1;
               if($num > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $bookid = $row['id'];
                    $id_course = $row['id_course'];
                    // echo $id_course;
                ?>
                    <tr>   
                    <td scope="row" class="text-center"><?= $i ?></td>
                    <td class="text-center"><?= $row['name'].' '.$row['lastname'] ?></td>

                    <td class="text-center"><?php 
                    $sql1 = "SELECT name FROM course WHERE id =$id_course ";
                    $result1 = mysqli_query($conn,$sql1);
                    $r = mysqli_fetch_assoc($result1);

                    echo $r['name'];
                    ?></td>

                    <td class="text-center"><?= DBThaiDate($row['date']) ?></td>
                    <td class="text-center"><?= TimeThai($row['time']) ?></td>
                    <td class="text-center ">
                        <?php  if($row['status'] == 1){
                            echo '<span class="text-warning font-weight-bold">ยังไม่เข้าใช้บริการ</span>';
                        }else{
                            echo '<span class="text-success font-weight-bold">เข้าใช้บริการแล้ว</span>';
                        }
                        ?>
                    </td>
                    <td class="text-center"> 
                    
                    <a class="btn btn-outline-dark btn-sm" href="?Menu=4&Submenu=edit_appointment&id=<?=$bookid?>">แก้ไข</a>
                    </td>

                    </tr>
                    <?php $i++;} }else{ ?>
                      <tr>
                        <td colspan="12" class="text-center"> 
                          <p>--------- ไม่พบข้อมูล ---------</p>
                        </td>
                      </tr>
                      <?php }?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>


</body>

</html>