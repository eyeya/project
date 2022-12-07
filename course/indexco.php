<?php 
include '../config.php';
$sql = "SELECT * FROM course";
$result =  mysqli_query($conn,$sql);
$num_row = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>

<body>
<style>
  
</style> <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h2>ข้อมูลคอร์ส</h2>
        </div>

        <div class="card-body">
        <a href="admin.php?Menu=2&Submenu=createcourse"><button type="button" class="btn btn-primary">เพิ่มข้อมูล </button></a>

        <?php if(isset($_SESSION['error'])) { ?>
          <div class="alert alert-danger" role="alert">
              <?php 
                  echo $_SESSION['error'];
                  unset($_SESSION['error']);
              ?>
          </div>
          <?php } ?>
          <?php if(isset($_SESSION['success'])) { ?>
              <div class="alert alert-success" role="alert">
                  <?php 
                      echo $_SESSION['success'];
                      unset($_SESSION['success']);
                  ?>
              </div>
          <?php } ?>
          <table class="table table-striped">
            <!-- <table class="w3-table-all w3-card-4"> -->
            <?php
            $i=1;
            // echo $num_row;
            if($num_row > 0){
            
            while($row = mysqli_fetch_array($result)){
              ?>
            <tr>
              <th width="10%">รหัส</th>
              <th>ชื่อคอร์ส</th>
              <th>ราคา</th>
              <th>รายละเอียด</th>
              <th>รูปภาพ</th>
              <th width="10%">แก้ไข</th>
              <th width="10%">ลบ</th>
            </tr>
            <tr>
              <td><?php echo $i?></td>
              <td><?php echo $row['name']?></td>
              <td><?php echo $row['price']?></td>
              <td><?php echo $row['details']?></td>
              <td><?php echo $row['image']?></td>
              <td><a href="?Menu=2&Submenu=editcourse&id=<?php echo $row['id']?>" class="btn btn-warning">แก้ไข</a></td>
              <td><a href="course/del_course.php?id=<?php echo $row['id']?>" class="btn btn-danger" onclick="return confirm('ต้องการลบข้อมูลหรือไม่?');">ลบ</a></td>
            </tr>
               <?php $i++;} 
            } else {?>
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
