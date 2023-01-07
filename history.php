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
            $sql = "SELECT booking.date,booking.time,booking.status,course.name AS name_course,course.price,course.type FROM booking LEFT JOIN course ON booking.id_course = course.id WHERE booking.id_user = '$user' ORDER BY booking.id DESC;";
            $result =  mysqli_query($conn, $sql);
            $num_row = mysqli_num_rows($result);
            $i = 1;
            if ($num_row > 0) {
              while ($row = mysqli_fetch_array($result)) {
                $id_course = $row['id_course'];
                
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
              <td><?php echo DBThaiDate($row['date']).'  '.TimeThai($row['time']); ?></td>
              <td><?php 
              if($row['type'] == 2){
                  echo $row['status'].' / 10 ครั้ง';
              }else{
                echo $row['status'].' ครั้ง';
              }
              ?></td>
              <td class="text-center"><?php 
              if($row['type'] == 1){
                echo '';
              }else{
                echo '<a href="index.php?Menu=5&Submenu=appointment" class="btn btn-success btn-sm">นัดหมาย</a>';
              }
              ?>
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
