<?php 
include '../config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "SELECT * FROM user WHERE id  = '$id'";
$result =  mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">


<style>
   
</style>
<!-- body -->

<body>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2>ข้อมูลผู้ใช้งาน</h2>
                </div>
                <div class="card-body">
                    <form class="create" action="user/update_user.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputName">รหัสผู้ใช้งาน</label>
                                <input type="text" class="form-control" name="id" value="<?php echo $row['id']?>" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPrice">ชื่อ</label>
                                <input type="text" class="form-control" name="name"  value="<?php echo $row['name']?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPrice">นามสกุล</label>
                                <input type="text" class="form-control" name="lastname"  value="<?php echo $row['lastname']?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPrice">อายุ</label>
                                <input type="text" class="form-control" name="age" value="<?php echo $row['age']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPrice">เบอร์โทร</label>
                                <input type="text" class="form-control" name="telephone" value="<?php echo $row['telephone']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPrice">username</label>
                                <input type="text" class="form-control" name="username"  value="<?php echo $row['username']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPrice">password</label>
                                <input type="text" class="form-control" name="password"  value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPrice">สถานะ</label>
                                <!-- <input type="text" class="form-control"  value="<?php echo $row['id']?>"> -->
                                <select class="form-control" name="u_role">
                                    <?php 
                                        if($row['u_role'] == 'user'){
                                            $select = 'selected';
                                            echo '<option value="admin">admin</option><option value="user" '.$select.'>user</option>';
                                        }else{
                                            $select = 'selected';
                                            echo '<option value="admin" '.$select.'>admin</option><option value="user" >user</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                          
                        </div>
                        <p class="w3-center">
                            <input class="btn btn-success" type="submit" name="submit" value="บันทึก" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset"class="btn btn-danger" name="cancel" value="ยกเลิก" />
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('showimg');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>

</html>