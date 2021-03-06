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
<style> 
input[type=submit]{
  height: 70px;
  width: 130px;
  background-color: #01004c;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
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
                <p class="app-sidebar__user-name"><b>user</b></p>
                <p class="app-sidebar__user-designation">Ch??o m???ng b???n tr??? l???i</p>
            </div>
        </div>
        <hr />
        <ul class="app-menu">


            <li><a class="app-menu__item active" href="./user.php"><span class="app-menu__label">Trang Ch???</span></a>
            </li>
            <li><a class="app-menu__item" href="./quan-ly-giao-vien-user.php"><span class="app-menu__label">Qu???n l?? Gi??o vi??n
                    </span></a></li>
            <li><a class="app-menu__item" href="./tim-kiem.php"><span class="app-menu__label">T??m ki???m</span></a></li>
            <li><a class="app-menu__item" href="./lien-he.php"><span class="app-menu__label">Li??n h???</span></a></li>
        </ul>
    </aside>
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active">
                    <a href="#"><b>Li??n h???</b></a>
                </li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
			   <form action="https://www.facebook.com/thptyd2">
    				<input type="submit" value="Facebook" />
			   </form
                        </div>
                    </div>
                        <div class="row element-button">
                           <form action="http://thptyendung2.bacgiang.edu.vn">
    				<input type="submit" value="Website" >
			</form



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
                title: "C???nh b??o",

                text: "B???n c?? ch???c ch???n l?? mu???n x??a nh??n vi??n n??y?",
                buttons: ["H???y b???", "?????ng ??"],
            }).then((willDelete) => {
                if (willDelete) {
                    swal("???? x??a th??nh c??ng.!", {});
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