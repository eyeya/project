<!DOCTYPE html>
<html lang="en">


<style>
    .create {
        background-color: #ed3f501f;
        width: 900px;
    }
</style>
<!-- body -->

<body>

    <div class="w3-container">
        <header class="headshow">
            <p>ข้อมูลคอร์ส</p>
        </header>
        <form class="create">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">ชื่อคอร์ส</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPrice">ราคา</label>
                    <input type="text" class="form-control" id="input" placeholder="Price">
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea1">รายละเอียด</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class="fa fa-file-picture-o" style="font-size:36px"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" type="file" name="image" onchange="loadFile(event)" /> <br>
                    <img id="showimg" src="" style="height:270px; width:200px;">
                </div>
            </div>
            <p class="w3-center">
                <input type="submit" name="submit" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" name="cancel" value="Cancel" />
            </p>
        </form>
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