<!DOCTYPE html>
<html>

<body>
    <style>
      
    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2>รายงานสรุปยอดรายเดือน</h2>
                </div>

                <div class="card-body">
                    <!-- //ปฏิทิน -->



                    <div class="search-container">
                        <form action="/action_page.php">
                           
                                <a>กรุณาเลือกวัน</a>
                                <input type="date" name="" onchange="selectday()">
                           
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                            <a href=""><button type="button" class="btn btn-primary"><i class="fa fa-print"></i>&nbsp; Print</button></a>
                        </form>
                    </div>


                    <table class="table table-striped">
                        <!-- <table class="w3-table-all w3-card-4"> -->
                        <tr>
                            <th width="10%">รหัส</th>
                            <th>วัน-เดือน-ปี</th>
                            <th>ชื่อคอร์ส</th>
                            <th>ชื่อโปรโมชั่น</th>
                            <th>ยอดรวม</th>
                            <th>ยอดจอง</th>
                            <th width="10%">ลบ</th>
                            
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>22-12-2022</td>
                            <td>คอร์สเติมน้ำให้ผิว</td>
                            <td>-</td>
                            <td>4000</td>
                            <td>5</td>
                            <td><button type="button" class="btn btn-danger">ลบ</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>22-12-2022</td>
                            <td>คอร์สหน้าใส</td>
                            <td>-</td>
                            <td>5000</td>
                            <td>5</td>
                            <td><button type="button" class="btn btn-danger">ลบ</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>22-12-2022</td>
                            <td>-</td>
                            <td>คอร์สหน้าใส</td>
                            <td>18000</td>
                            <td>2</td>
                            <td><button type="button" class="btn btn-danger">ลบ</button></td>
                        </tr>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>


</body>

</html>