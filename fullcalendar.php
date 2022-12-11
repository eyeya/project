<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>

<body>
    <style>
        .fullcalendar {
            padding-top: 20px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 150px;
        }

        .table .thead-dark th td {
            text-align: center;

        }
        .full{
            padding-top: 15px;
            padding-left: 600px;
            padding-bottom: 20px;
        }
    </style>

    <div class="fullcalendar">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2 align="center">ประวัติการจอง</h2>
                    </div>

                    <div class="card-body">
                    <div class="full">
                        <form action="/action_page.php">
                           
                                <a>กรุณาเลือกวัน</a>
                                <input type="date" name="" onchange="selectday()">
                           
                            <button type="submit"><i class="fa fa-search"></i></button>
                            
                        </form>
                    </div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="25%">ชื่อคอร์ส</th>
                                    <th width="25%">วันที่จอง</th>
                                    <th width="15%">เต็ม/ว่าง</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>คอร์สหน้าใส</td>
                                    <td>20/11/2022</td>
                                    <td>เต็ม</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>