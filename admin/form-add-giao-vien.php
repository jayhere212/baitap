<?php
require_once ('dbhelp.php');

$s_fullname = $s_email = $s_address = $s_sdt = $s_ngaysinh = $s_gioitinh ='';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['fullname'])) {
		$s_fullname = $_POST['fullname'];
	}

	if (isset($_POST['email'])) {
		$s_email = $_POST['email'];
	}

	if (isset($_POST['address'])) {
		$s_address = $_POST['address'];
	}

    if (isset($_POST['sdt'])) {
		$s_sdt = $_POST['sdt'];
	}

    if (isset($_POST['ngaysinh'])) {
		$s_ngaysinh = $_POST['ngaysinh'];
	}

    if (isset($_POST['gioitinh'])) {
		$s_gioitinh = $_POST['gioitinh'];
	}

	if (isset($_POST['id'])) {
		$s_id = $_POST['id'];
	}

	$s_fullname = str_replace('\'', '\\\'', $s_fullname);
	$s_email      = str_replace('\'', '\\\'', $s_email);
	$s_address  = str_replace('\'', '\\\'', $s_address);
    $s_sdt      = str_replace('\'', '\\\'', $s_sdt);
    $s_ngaysinh = str_replace('\'', '\\\'', $s_ngaysinh);
    $s_gioitinh = str_replace('\'', '\\\'', $s_gioitinh);
	$s_id       = str_replace('\'', '\\\'', $s_id);

	if ($s_id != '') {
		//update
		$sql = "update giaovien set fullname = '$s_fullname', email = '$s_email', address = '$s_address', sdt = '$s_sdt', ngaysinh = '$s_ngaysinh', gioitinh = '$s_gioitinh' where id = " .$s_id;
	} else {
		//insert
		$sql = "insert into giaovien(fullname, email, address, sdt, ngaysinh, gioitinh) value ('$s_fullname', '$s_email', '$s_address', '$s_sdt', '$s_ngaysinh', '$s_gioitinh')";
	}

	// echo $sql;

	execute($sql);

	header('Location: quan-ly-giao-vien.php');
	die();
}

$id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['id'];
	$sql         = 'select * from student where id = '.$id;
	$giaovienList = executeResult($sql);
	if ($giaovienList != null && count($giaovienList) > 0) {
		$std        = $giaovienList[0];
		$s_fullname = $std['fullname'];
		$s_email      = $std['email'];
		$s_address  = $std['address'];
        $s_sdt      = $std['sdt'];
        $s_ngaysinh = $std['ngaysinh'];
        $s_gioitinh = $std['gioitinh'];
	} else {
		$id = '';
	}
}
?>

<!DOCTYPE html>
<html>
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
    <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script>
    function readURL(input, thumbimage) {
        if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#thumbimage").attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        } else { // Sử dụng cho IE
            $("#thumbimage").attr('src', input.value);

        }
        $("#thumbimage").show();
        $('.filename').text($("#uploadfile").val());
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'default');
        $(".removeimg").show();
        $(".Choicefile").unbind('click');

    }
    $(document).ready(function() {
        $(".Choicefile").bind('click', function() {
            $("#uploadfile").click();

        });
        $(".removeimg").click(function() {
            $("#thumbimage").attr('src', '').hide();
            $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
            $(".removeimg").hide();
            $(".Choicefile").bind('click', function() {
                $("#uploadfile").click();
            });
            $('.Choicefile').css('background', '#14142B');
            $('.Choicefile').css('cursor', 'pointer');
            $(".filename").text("");
        });
    })
    </script>
</head>
<body class="app sidebar-mini rtl">
	<style>
    .Choicefile {
        display: block;
        background: #14142B;
        border: 1px solid #fff;
        color: #fff;
        width: 150px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        padding: 5px 0px;
        border-radius: 5px;
        font-weight: 500;
        align-items: center;
        justify-content: center;
    }

    .Choicefile:hover {
        text-decoration: none;
        color: white;
    }

    #uploadfile,
    .removeimg {
        display: none;
    }

    #thumbbox {
        position: relative;
        width: 100%;
        margin-bottom: 20px;
    }

    .removeimg {
        height: 25px;
        position: absolute;
        background-repeat: no-repeat;
        top: 5px;
        left: 5px;
        background-size: 25px;
        width: 25px;
        /* border: 3px solid red; */
        border-radius: 50%;
    }

    .removeimg::before {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        content: '';
        border: 1px solid red;
        background: red;
        text-align: center;
        display: block;
        margin-top: 11px;
        transform: rotate(45deg);
    }

    .removeimg::after {
        /* color: #FFF; */
        /* background-color: #DC403B; */
        content: '';
        background: red;
        border: 1px solid red;
        text-align: center;
        display: block;
        transform: rotate(-45deg);
        margin-top: -2px;
    }
    </style>
    <header class="app-header">
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">


            <!-- User Menu-->
            <li><a class="app-nav__item" href="./quan-ly-giao-vien.php"><i class='bx bx-log-out bx-rotate-180'></i> </a>

            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <div>
                <p class="app-sidebar__user-name"><b>admin</b></p>
                <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
            </div>
        </div>
        <hr>
        <ul class="app-menu">

            <li><a class="app-menu__item active" href="./manager.php"><span class="app-menu__label">Trang Chủ</span></a>
            </li>
            <li>
                <a class="app-menu__item " href="./quan-ly-hoc-sinh.php"> <span class="app-menu__label">Quản lý học sinh
                    </span></a>
            </li>

            <li><a class="app-menu__item" href="./quan-ly-diem.php"><span class="app-menu__label">Quản lý
                        điểm</span></a></li>
            <li><a class="app-menu__item" href="./quan-ly-giao-vien.php"><span class="app-menu__label">Quản lý Giáo viên
                    </span></a></li>
            <li><a class="app-menu__item" href="./tim-kiem.php"><span class="app-menu__label">Tìm kiếm</span></a></li>




        </ul>
    </aside>
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item">Danh sách giáo viên</li>
                <li class="breadcrumb-item"><a href="#"></a></li>
            </ul>
        </div>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Add Teacher</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="usr">Name:</label>
					  <input type="number" name="id" value="<?=$id?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$s_fullname?>">
					</div>
					<div class="form-group">
					  <label for="birthday">Email:</label>
					  <input required="true" type="text" class="form-control" id="email" name="email" value="<?=$s_email?>">
					</div>
					<div class="form-group">
					  <label for="address">Address:</label>
					  <input required="true" type="text" class="form-control" id="address" name="address" value="<?=$s_address?>">
					</div>
                    <div class="form-group">
					  <label for="sdt">Số điện thoại:</label>
					  <input required="true" type="number" class="form-control" id="sdt" name="sdt" value="<?=$s_sdt?>">
					</div>
                    <div class="form-group">
                      <label for="ngaysinh">Ngày sinh</label>
                      <input required="true" class="form-control" type="date" id="ngaysinh" name="ngaysinh" value="<?=$s_ngaysinh?>">
                    </div>
                    <div class="form-group">
                       <label for="gioitinh">Giới tính</label>
                         <select required="true" class="form-control" id="gioitinh" name="gioitinh" value="<?=$s_gioitinh?>">
                             <option>-- Chọn giới tính --</option>
                             <option>Nam</option>
                             <option>Nữ</option>
                         </select>
                    </div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
    </main>
</body>
</html>