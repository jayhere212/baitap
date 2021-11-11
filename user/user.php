<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

</head>

<body onload="time()" class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">


            <!-- User Menu-->
            <li><a class="app-nav__item" href="./logout.php"><i class='bx bx-log-out bx-rotate-180'></i> </a>

            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <div>
                <p class="app-sidebar__user-name"><b>user</b></p>
                <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
            </div>
        </div>
        <hr>
        <ul class="app-menu">

            <li><a class="app-menu__item active" href="./user.php"><span class="app-menu__label">Trang
                        Chủ</span></a></li>
	    <li><a class="app-menu__item " href="./quan-ly-giao-vien-user.php"><span class="app-menu__label">Quản
                        Lý
                        Giáo
                        Viên</span></a></li>

            <li><a class="app-menu__item" href="./tim-kiem.php"><span class="app-menu__label">Tìm kiếm</span></a></li>
            <li><a class="app-menu__item" href="./lien-he.php"><span class="app-menu__label">Liên hệ</span></a></li>



        </ul>
    </aside>
    <main class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="app-title">
                    <ul class="app-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><b>Trang Chủ</b></a></li>
                    </ul>
                    <div id="clock"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Left-->
            <div class="col-md-12 col-lg-6">
                <div class="row">
                    <!-- col-6 -->
                    <div class="col-md-6">
                        <div class="widget-small primary coloured-icon"><i class='icon bx bxs-user-account fa-3x'></i>
                            <div class="info">
                                <h4>Tổng học sinh </h4>
                                <p><b>56 Học sinh</b></p>
                                <p class="info-tong">Tổng số học sinh được quản lý.</p>
                            </div>
                        </div>
                    </div>


                    <!-- col-6 -->
                    <div class="col-md-6">
                        <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
                            <div class="info">
                                <h4>Khen thưởng </h4>
                                <p><b>2 Học sinh</b></p>

                            </div>
                        </div>
                    </div>
                    <!-- col-6 -->
                    <div class="col-md-6">
                        <div class="widget-small danger coloured-icon"><i class='icon bx bxs-error-alt fa-3x'></i>
                            <div class="info">
                                <h4>Kỉ Luật</h4>
                                <p><b>4 Học sinh</b></p>

                            </div>
                        </div>
                    </div>
                    <!-- col-12 -->
                    <div class="col-md-12">
                        <div class="tile">
                            <h3 class="tile-title">Tình trạng học tập </h3>
                            <div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID học sinh</th>
                                            <th>Tên học sinh</th>
                                            <th>Điểm trung bình</th>
                                            <th>Khen thưởng </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AL3947</td>
                                            <td>Phạm Thị Ngọc</td>
                                            <td>
                                                10.0
                                            </td>
                                            <td><span class="badge bg-info">Học Sinh Xuất Xắc</span></td>
                                        </tr>
                                        <tr>
                                            <td>ER3835</td>
                                            <td>Nguyễn Thị Mỹ Yến</td>
                                            <td>
                                                8.0
                                            </td>
                                            <td><span class="badge bg-warning">Học Sinh Giỏi</span></td>
                                        </tr>
                                        <tr>
                                            <td>MD0837</td>
                                            <td>Triệu Thanh Phú</td>
                                            <td>
                                                7.0
                                            </td>
                                            <td><span class="badge bg-success">Học sinh Khá</span></td>
                                        </tr>
                                        <tr>
                                            <td>MT9835</td>
                                            <td>Đặng Hoàng Phúc </td>
                                            <td>
                                                5.0
                                            </td>
                                            <td><span class="badge bg-danger">Học sinh Trung Bình </span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- / div trống-->
                        </div>
                    </div>
                    <!-- / col-12 -->
                    <!-- col-12 -->

                </div>
                <!--END left-->
                <!--Right-->

                <!--END right-->
            </div>
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Lịch Sử Thành Lập Trường</h3>
                    <div class>
                        <p>45 năm, nhìn lại chặng đường đầy gian nan và thử thách mà thầy và trò Trường THPT Yên Dũng số
                            2 đã vượt qua, chúng ta thật tự hào vì những cố gắng không mệt mỏi của bao thế hệ thầy cô
                            giáo đã nhiệt tình cống hiến cho sự nghiệp
                            chung, cũng thật tự hào vì những thành tích học tập của bao thế hệ học trò đã dệt nên truyền
                            thống cho ngôi trường, để giờ đây, trường THPT Yên Dũng số 2 đã thực sự là một ngôi trường
                            có bề dày truyền thống, có uy tín với
                            nhân dân trong huyện, trong tỉnh.

                            <br>
                            <br>
                            45 năm, nhìn lại chặng đường đầy gian nan và thử thách mà thầy và trò Trường THPT Yên Dũng
                            số 2 đã vượt qua, chúng ta thật tự hào vì những cố gắng không mệt mỏi của bao thế hệ thầy cô
                            giáo đã nhiệt tình cống hiến cho sự nghiệp chung, cũng thật tự hào vì những thành tích học
                            tập của bao thế hệ học trò đã dệt nên truyền thống cho ngôi trường, để giờ đây, trường THPT
                            Yên Dũng số 2 đã thực sự là một ngôi trường có bề dày truyền thống, có uy tín với nhân dân
                            trong huyện, trong tỉnh. Từ mái trường này, biết bao học trò đã trưởng thành và giữ những
                            chức vụ trọng yếu của huyện, của tỉnh, của quốc gia; bao học trò đã thành những doanh nhân,
                            những trí thức, những công dân tốt góp phần cống hiến cho xã hội ngày một tiến bộ hơn, văn
                            minh hơn, hiện đại hơn. Đó là phần thưởng lớn nhất, vinh dự nhất cho các thầy cô và cho ngôi
                            trường THPT Yên Dũng số 2.
                            <br>
                            <br>
                            <a href="https://www.youtube.com/watch?v=3axu_wXiYsA" style="color: red;"> CLIP GIỚI THIỆU
                                TRƯỜNG </a>

                        </p>
                    </div>
                </div>
            </div>
        </div>



            <div class="text-center" style="font-size: 13px">
                <p><b>
                        <script type="text/javascript">
                        // document.write(new Date().getFullYear());
                        </script>
                    </b></p>
            </div>
    </main>
    <script src="js/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/popper.min.js"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <!--===============================================================================================-->
    <script src="js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <!--===============================================================================================-->
    <script src="js/plugins/pace.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <!--===============================================================================================-->

    <script type="text/javascript">
    //Thời Gian
    function time() {
        var today = new Date();
        var weekday = new Array(7);
        weekday[0] = "Chủ Nhật";
        weekday[1] = "Thứ Hai";
        weekday[2] = "Thứ Ba";
        weekday[3] = "Thứ Tư";
        weekday[4] = "Thứ Năm";
        weekday[5] = "Thứ Sáu";
        weekday[6] = "Thứ Bảy";
        var day = weekday[today.getDay()];
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        nowTime = h + " giờ " + m + " phút " + s + " giây";
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        today = day + ', ' + dd + '/' + mm + '/' + yyyy;
        tmp = '<span class="date"> ' + today + ' - ' + nowTime +
            '</span>';
        document.getElementById("clock").innerHTML = tmp;
        clocktime = setTimeout("time()", "1000", "Javascript");

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    }
    </script>
</body>

</html>