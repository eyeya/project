<!DOCTYPE html>
<html lang="en">


<style>
    .fullca {
        width: 250px;
        margin-top: 30px;
    }
</style>
<!-- body -->

<body>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2>ข้อมูลการจอง</h2>
                </div>

                <div class="card-body">

                    <form class="create">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>รหัสจอง</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>ชื่อผู้จอง</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <div class="fullca">
                                    <a>กรุณาเลือกวัน</a>&nbsp;&nbsp;
                                    <input type="date" name="" onchange="selectday()">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label>ชื่อคอร์ส</label>
                                <input type="text" class="form-control">
                            </div>

                        </div>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"></div>
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