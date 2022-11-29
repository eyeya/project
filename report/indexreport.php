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
                            <th>วัน/เดือน/ปี</th>
                            <th>ชื่อคอร์ส</th>
                            <th>ยอดรวม</th>
                            <th width="10%">ลบ</th>
                            
                        </tr>
                        <tr>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>50</td>
                           
                            <td><button type="button" class="btn btn-danger">ลบ</button></td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>50</td>
                            
                            <td><button type="button" class="btn btn-danger">ลบ</button></td>
                        <tr>
                            <td>Adam</td>
                            <td>Johnson</td>
                            <td>67</td>
                            <td>50</td>
                            
                            <td><button type="button" class="btn btn-danger">ลบ</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


</body>

</html>