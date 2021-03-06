<?php
session_start();
include'dbconnection.php';
// checking session is valid for not
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from users where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main1.css">
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
            <li><a class="app-nav__item" href="logout.php"><i class='bx bx-log-out bx-rotate-180'></i> </a>

            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <div>
                <p class="app-sidebar__user-name"><b>admin</b></p>
                <p class="app-sidebar__user-designation">Ch??o m???ng b???n tr??? l???i</p>
            </div>
        </div>
        <hr>
        <ul class="app-menu">

            <li><a class="app-menu__item active" href="./manager.php"><span class="app-menu__label">Trang
                        Ch???</span></a></li>
            <li>
                <a class="app-menu__item " href="./quan-ly-hoc-sinh.php"> <span class="app-menu__label">Qu???n l?? h???c sinh
                    </span></a>
            </li>

            <li><a class="app-menu__item" href="./quan-ly-diem.php"><span class="app-menu__label">Qu???n l??
                        ??i???m</span></a></li>
            <li><a class="app-menu__item" href="./quan-ly-giao-vien.php"><span class="app-menu__label">Qu???n l?? Gi??o vi??n
                    </span></a></li>
            <li><a class="app-menu__item" href="./tim-kiem.php"><span class="app-menu__label">T??m ki???m</span></a></li>




        </ul>
    </aside>
    <main class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="app-title">
                    <ul class="app-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><b>Trang Ch???</b></a></li>
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
                                <h4>T???ng h???c sinh </h4>
                                <p><b>56 H???c sinh</b></p>
                                <p class="info-tong">T???ng s??? h???c sinh ???????c qu???n l??.</p>
                            </div>
                        </div>
                    </div>


                    <!-- col-6 -->
                    <div class="col-md-6">
                        <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
                            <div class="info">
                                <h4>Khen th?????ng </h4>
                                <p><b>2 H???c sinh</b></p>

                            </div>
                        </div>
                    </div>
                    <!-- col-6 -->
                    <div class="col-md-6">
                        <div class="widget-small danger coloured-icon"><i class='icon bx bxs-error-alt fa-3x'></i>
                            <div class="info">
                                <h4>K??? Lu???t</h4>
                                <p><b>4 H???c sinh</b></p>

                            </div>
                        </div>
                    </div>
                    <!-- col-12 -->
                    <div class="col-md-12">
                        <div class="tile">
                            <h3 class="tile-title">T??nh tr???ng h???c t???p </h3>
                            <div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID h???c sinh</th>
                                            <th>T??n h???c sinh</th>
                                            <th>??i???m trung b??nh</th>
                                            <th>Khen th?????ng </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AL3947</td>
                                            <td>Ph???m Th??? Ng???c</td>
                                            <td>
                                                10.0
                                            </td>
                                            <td><span class="badge bg-info">H???c Sinh Xu???t X???c</span></td>
                                        </tr>
                                        <tr>
                                            <td>ER3835</td>
                                            <td>Nguy???n Th??? M??? Y???n</td>
                                            <td>
                                                8.0
                                            </td>
                                            <td><span class="badge bg-warning">H???c Sinh Gi???i</span></td>
                                        </tr>
                                        <tr>
                                            <td>MD0837</td>
                                            <td>Tri???u Thanh Ph??</td>
                                            <td>
                                                7.0
                                            </td>
                                            <td><span class="badge bg-success">H???c sinh Kh??</span></td>
                                        </tr>
                                        <tr>
                                            <td>MT9835</td>
                                            <td>?????ng Ho??ng Ph??c </td>
                                            <td>
                                                5.0
                                            </td>
                                            <td><span class="badge bg-danger">H???c sinh Trung B??nh </span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- / div tr???ng-->
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
                    <h3 class="tile-title">L???ch S??? Th??nh L???p Tr?????ng</h3>
                    <div class>
                        <p>45 n??m, nh??n l???i ch???ng ???????ng ?????y gian nan v?? th??? th??ch m?? th???y v?? tr?? Tr?????ng THPT Y??n D??ng s???
                            2 ???? v?????t qua, ch??ng ta th???t t??? h??o v?? nh???ng c??? g???ng kh??ng m???t m???i c???a bao th??? h??? th???y c??
                            gi??o ???? nhi???t t??nh c???ng hi???n cho s??? nghi???p
                            chung, c??ng th???t t??? h??o v?? nh???ng th??nh t??ch h???c t???p c???a bao th??? h??? h???c tr?? ???? d???t n??n truy???n
                            th???ng cho ng??i tr?????ng, ????? gi??? ????y, tr?????ng THPT Y??n D??ng s??? 2 ???? th???c s??? l?? m???t ng??i tr?????ng
                            c?? b??? d??y truy???n th???ng, c?? uy t??n v???i
                            nh??n d??n trong huy???n, trong t???nh.

                            <br>
                            <br>
                            45 n??m, nh??n l???i ch???ng ???????ng ?????y gian nan v?? th??? th??ch m?? th???y v?? tr?? Tr?????ng THPT Y??n D??ng
                            s??? 2 ???? v?????t qua, ch??ng ta th???t t??? h??o v?? nh???ng c??? g???ng kh??ng m???t m???i c???a bao th??? h??? th???y c??
                            gi??o ???? nhi???t t??nh c???ng hi???n cho s??? nghi???p chung, c??ng th???t t??? h??o v?? nh???ng th??nh t??ch h???c
                            t???p c???a bao th??? h??? h???c tr?? ???? d???t n??n truy???n th???ng cho ng??i tr?????ng, ????? gi??? ????y, tr?????ng THPT
                            Y??n D??ng s??? 2 ???? th???c s??? l?? m???t ng??i tr?????ng c?? b??? d??y truy???n th???ng, c?? uy t??n v???i nh??n d??n
                            trong huy???n, trong t???nh. T??? m??i tr?????ng n??y, bi???t bao h???c tr?? ???? tr?????ng th??nh v?? gi??? nh???ng
                            ch???c v??? tr???ng y???u c???a huy???n, c???a t???nh, c???a qu???c gia; bao h???c tr?? ???? th??nh nh???ng doanh nh??n,
                            nh???ng tr?? th???c, nh???ng c??ng d??n t???t g??p ph???n c???ng hi???n cho x?? h???i ng??y m???t ti???n b??? h??n, v??n
                            minh h??n, hi???n ?????i h??n. ???? l?? ph???n th?????ng l???n nh???t, vinh d??? nh???t cho c??c th???y c?? v?? cho ng??i
                            tr?????ng THPT Y??n D??ng s??? 2.
                            <br>
                            <br>
                            <a href="https://www.youtube.com/watch?v=3axu_wXiYsA" style="color: red;"> CLIP GI???I THI???U
                                TR?????NG </a>

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
    //Th???i Gian
    function time() {
        var today = new Date();
        var weekday = new Array(7);
        weekday[0] = "Ch??? Nh???t";
        weekday[1] = "Th??? Hai";
        weekday[2] = "Th??? Ba";
        weekday[3] = "Th??? T??";
        weekday[4] = "Th??? N??m";
        weekday[5] = "Th??? S??u";
        weekday[6] = "Th??? B???y";
        var day = weekday[today.getDay()];
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        nowTime = h + " gi??? " + m + " ph??t " + s + " gi??y";
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
<?php } ?>