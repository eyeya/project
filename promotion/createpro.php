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
                    <h2>ข้อมูลโปรโมชั่น</h2>
                </div>
                <div class="card-body">
                    <form class="create" action="promotion/addpro.php" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">ชื่อโปรโมชั่น</label>
                                <input type="text" class="form-control"   name="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPrice">ราคา</label>
                                <input type="text" class="form-control"  name="price" >
                            </div>
                            <div class="form-group col-md-12">
                                <label>รายละเอียด</label>
                                <input class="form-control" type="text" name="details" >
                            </div>
                        </div>
                        <div class="w3-row w3-section">
                            <div class="w3-rest">
                                <input class="w3-input w3-border" type="file" name="image" onchange="loadFile(event)" /> <br>
                                <img id="showimg" src="" style="height:270px; width:200px;">
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