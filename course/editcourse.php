<?php 
include '../config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "SELECT * FROM course WHERE id  = '$id'";
$result =  mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$type = $row['type'];
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
                    <h2>ข้อมูล</h2>
                </div>
                <div class="card-body">
                    <form class="create" action="course/update_course.php" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                        <div class="form-group col-md-2">
                                <label>รหัส</label>
                                <input type="text" class="form-control" name="id" value="<?php echo $row['id']?>" readonly >
                            </div>
                            <div class="form-group col-md-6">
                                <label>ชื่อ</label>
                                <input type="text" class="form-control"  name="name" value="<?php echo $row['name']?>" >
                            </div>
                            <div class="form-group col-md-4">
                                <label>ราคา</label>
                                <input type="text" class="form-control"  name="price" value="<?php echo $row['price']?>" >
                            </div>
                            <div class="form-group col-md-4">
                                <label>ราคาโปรโมชั่น</label>
                                <select class="form-control" name="type" >
                                    
                                    <?php
                                        $sql1 = "SELECT * FROM type ";
                                        $sql1 = $conn->query($sql1);
                                        while($r1 = $sql1->fetch_assoc()){
                                            echo "<option value='".$r1['id']."'";
                                            if($r1['id'] == $type){
                                                echo "selected";
                                            }
                                            echo ">".$r1['name']."</option>'";
                                        }
                                        ?>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label>รายละเอียด</label>
                                <input class="form-control"  name="details" value="<?php echo $row['details']?>" ></input>
                            </div>
                        </div>
                        <div class="w3-row w3-section">
                            <div class="w3-rest">
                                <input class="w3-input w3-border" type="file" name="image" onchange="loadFile(event)" /> <br>
                                <img id="showimg" src="" style="height:270px; width:200px;">
                                <img src="course/upload/<?php echo $row['image']?>" style="max-width:150px;">
                                <input type="hidden" value="<?php echo $row['image']?>" name="old_img">
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