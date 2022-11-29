<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Welcome to H SPA</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>
    .regis {

        background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);
        background: linear-gradient(to bottom, #FFB88C, #DE6262);
        margin-top: 3%;
        padding: 3%;
        
      

    }

    .register {
        background-color: #f8f9fa;
        background: #fff;
        border-radius: 10px;
        box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
        
     
    }

    .register-left {
        text-align: center;
        color: #fff;
        margin-top: 4%;
       
    }

    .register-left input {
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
    }

    .register-right {
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
    }

    .register-left img {
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        width: 150%;
        padding-left: 15%;
        -webkit-animation: mover 2s infinite alternate;
        animation: mover 1s infinite alternate;
    }

    .register-left p {
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
    }

    .register .register-form {
        padding: 10%;
        margin-top: 10%;
    }

    .btnRegister {
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #0062cc;
        color: #fff;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }

    .register .nav-tabs {
        margin-top: 3%;
        border: none;
        background: #0062cc;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
    }

    .register .nav-tabs .nav-link {
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #fff;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }

    .register .nav-tabs .nav-link:hover {
        border: none;
    }

    .register .nav-tabs .nav-link.active {
        width: 100px;
        color: #0062cc;
        border: 2px solid #0062cc;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }

    .register-heading {
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;
        font-size: 30px;
    }
</style>


<body class="regis">
    

    <div class="container register">
        <div class="row " >
            <div class="col-md-3 register-left">
                <img src="images/ห้อง1.jpg" alt="" />
                
                
            </div>
            <div class="col-md-9 register-right">

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">สมัครสมาชิก H SPA</h3>
                        <div class="row register-form">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" value="" name="name"/>
                                </div>
                                <div class="form-group">
                                    <label>อายุ</label>
                                    <input type="text" class="form-control" value="" name="age"/>
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label>นามสกุล</label>
                                    <input type="text" class="form-control" value="" name="lastname"/>
                                </div>
                                <div class="form-group">
                                    <label>เบอร์โทร</label>
                                    <input type="password" class="form-control" value="" name="telephone"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group ">
                                    <label>username</label>
                                    <input type="password" class="form-control " value="" name="username"/>
                                </div>
                                <div class="form-group ">
                                    <label>password</label>
                                    <input type="password" class="form-control" value="" name="password"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                            <input type="submit" class="btnRegister" value="สมัครสมาชิก" name="u_role"/>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>





</body>

</html>