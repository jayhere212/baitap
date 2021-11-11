<?php
require_once ('dbhelp.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main1.css" />
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
    <!-- Navbar-->
    <header class="app-header">
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li>
                <a class="app-nav__item" href="./logout.php"><i class="bx bx-log-out bx-rotate-180"></i>
                </a>
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
        <hr />
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
 >9.0</td>

                    <td>Giỏi</td>
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active">
                    <a href="#"><b>Tìm kiếm</b></a>
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
                                    <th>Điểm trung bình</th>
                                    <th>xếp loại</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_GET['s']) && $_GET['s'] != '') {
                                    $sql = 'select * from diem where fullname like "%'.$_GET['s'].'%"';
                                } else {
                                    $sql = 'select * from diem';
                                }

                                $diemList = executeResult($sql);

                                $index = 1;
                                foreach ($diemList as $std) {
                                    echo '<tr>
		                               	<td>'.($index++).'</td>
		                                <td>'.$std['fullname'].'</td>
		                                <td>'.$std['diemtb'].'</td>
		                                <td>'.$std['xeploai'].'</td>
		                                 </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--
  MODAL
-->
    <div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
        data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <span class="thong-tin-thanh-toan">
                                <h5>Chỉnh sửa điểm học sinh</h5>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label">ID học sinh</label>
                            <input class="form-control" type="text" required value="#CD2187" disabled />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Họ và tên</label>
                            <input class="form-control" type="text" required value="Võ Trường" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Điểm Trung Bình</label>
                            <input class="form-control" type="text" required value="" />
                        </div>
                        <!-- <div class="form-group col-md-6">
                            <label for="exampleSelect1" class="control-label">Hạnh Kiểm</label
                >
                <select class="form-control" id="exampleSelect1">
                  <option>Giỏi</option>
                  <option>Khá</option>  
                  <option>Trung Bình</option> 
                         -->

                        <div class="form-group col-md-6">
                            <label for="exampleSelect1" class="control-label">Xếp Loại</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>Giỏi</option>
                                <option>Khá</option>
                                <option>Trung Bình</option>
                                <option>Trung Bình-Yếu</option>
                                <option>Kém</option>

                            </select>
                        </div>
                    </div>
                    <br />

                    <br />
                    <br />
                    <button class="btn btn-save" type="button">Lưu lại</button>
                    <a class="btn btn-cancel" data-dismiss="modal" href="index.html">Hủy bỏ</a>
                    <br />
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!--
  MODAL
-->

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
    <script>
    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("myTable").deleteRow(i);
    }
    jQuery(function() {
        jQuery(".trash").click(function() {
            swal({
                title: "Cảnh báo",

                text: "Bạn có chắc chắn là muốn xóa nhân viên này?",
                buttons: ["Hủy bỏ", "Đồng ý"],
            }).then((willDelete) => {
                if (willDelete) {
                    swal("Đã xóa thành công.!", {});
                }
            });
        });
    });
    oTable = $("#sampleTable").dataTable();
    $("#all").click(function(e) {
        $("#sampleTable tbody :checkbox").prop(
            "checked",
            $(this).is(":checked")
        );
        e.stopImmediatePropagation();
    });

    //EXCEL
    // $(document).ready(function () {
    //   $('#').DataTable({

    //     dom: 'Bfrtip',
    //     "buttons": [
    //       'excel'
    //     ]
    //   });
    // });

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

    //Modal
    $("#show-emp").on("click", function() {
        $("#ModalUP").modal({
            backdrop: false,
            keyboard: false,
        });
    });
    </script>
</body>

</html>