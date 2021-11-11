<?php
require_once ('dbhelp.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Danh sách giáo viên</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" />
</head>
<body onload="time()" class="app sidebar-mini rtl">
    <header class="app-header">
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li>
                <a class="app-nav__item" href="./logout.php">
                    <i class="bx bx-log-out bx-rotate-180"></i>
                </a>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">

            <div>
                <p class="app-sidebar__user-name">
                    <b>user</b>
                </p>
                <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
            </div>
        </div>
        <hr />
        <ul class="app-menu">


            <li>
                <a class="app-menu__item active" href="./user.php">
                    <span class="app-menu__label">Trang Chủ</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="./quan-ly-giao-vien-user.php">
                    <span class="app-menu__label">
                        Quản lý Giáo viên
                    </span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="./tim-kiem.php">
                    <span class="app-menu__label">Tìm kiếm</span>
                </a>
            </li>
	    <li>
                <a class="app-menu__item" href="./lien-he.php">
                    <span class="app-menu__label">
                        Liên hệ
                    </span>
                </a>
            </li>




        </ul>
    </aside>
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active">
                    <a href="#">
                        <b>Danh sách giáo viên</b>
                    </a>
                </li>
            </ul>
            <div id="clock"></div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">

                            </div>

                        </div>
                        <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0"
                            border="0" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ & Tên</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_GET['s']) && $_GET['s'] != '') {
                                    $sql = 'select * from giaovien where fullname like "%'.$_GET['s'].'%"';
                                } else {
                                    $sql = 'select * from giaovien';
                                }

                                $giaovienList = executeResult($sql);

                                $index = 1;
                                foreach ($giaovienList as $std) {
                                    echo '<tr>
		                	<td>'.($index++).'</td>
		                	<td>'.$std['fullname'].'</td>
		                	<td>'.$std['email'].'</td>
		                   	<td>'.$std['address'].'</td>
                            <td>'.$std['sdt'].'</td>
                            <td>'.$std['ngaysinh'].'</td>
                            <td>'.$std['gioitinh'].'</td>
		                	
		                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <script type="text/javascript">
		function deletegiaovien(id) {
			option = confirm('Bạn có muốn xoá giao viên này không')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('delete-giaovien.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
                }
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
            dd = "0" + dd;
        }
        if (mm < 10) {
            mm = "0" + mm;
        }
        today = day + ", " + dd + "/" + mm + "/" + yyyy;
        tmp = '<span class="date"> ' + today + " - " + nowTime + "</span>";
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
            <!-- Essential javascripts for application to work-->
            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="src/jquery.table2excel.js"></script>
            <script src="js/main.js"></script>
            <!-- The javascript plugin to display page loading on top-->
            <script src="js/plugins/pace.min.js"></script>
            <!-- Page specific javascripts-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
            <!-- Data table plugin-->
            <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript">
    $("#sampleTable").DataTable();
            </script>
        </div>
    </main>
</body>
</html>