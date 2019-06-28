<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Image and text -->

    <div class="navbar navbar-light  text-dark" style="background: #ffe70a">

        <p>
            <a class="navbar-brand" href="#">
                <img src="https://www.bru.ac.th/wp-content/uploads/2018/06/bru-web-logo.svg"  width="600" height="115" >
            </a>
            <strong style="margin-left: 2rem;  font-size: 25px">ระบบรับสมัครสอบแข่งขันวันวิทยาศาสตร์</strong>
        </p>
    </div>

    </div>

    <div class="links">
        <nav class="navbar navbar-expand-lg navbar-light " style="background: #ffffd2" >
            <button type="button" class="btn btn-outline-primary">หน้าแรก</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <button type="button" class="btn btn-outline-warning">วัตถุประสงค์</button>

                    </li>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            กิจกรรม
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">การแข่งขัน</a>
                            <a class="dropdown-item" href="#">การประกวด</a>
                            <a class="dropdown-item" href="#">ค่ายกิจกรรม</a>
                        </div>
                    </li>
                    <button type="button" class="btn btn-outline-success">ผลการแข่งขัน</button>

                    </li>

                    <button type="button" class="btn btn-outline-danger">ตรวจสอบรายชื่อ</button>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ติดต่อเรา
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">การแข่งขัน</a>
                            <a class="dropdown-item" href="#">การประกวด</a>
                            <a class="dropdown-item" href="#">ค่ายกิจกรรม</a>
                            <a class="dropdown-item" href="#">นิทรรศการ</a>
                        </div>
                    </li>
                </ul>

            </div>
        </nav>
    </div>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</head>
</html>