<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
{
    $adminusername=$_POST['username'];
    $pass=md5($_POST['password']);
    $ret=mysqli_query($con,"SELECT * FROM user WHERE username='$adminusername' and password='$pass'");
    $num=mysqli_fetch_array($ret);
    if($num>0)
    {
        $extra="user.php";
        $_SESSION['login']=$_POST['username'];
        $_SESSION['id']=$num['id'];
        echo "<script>window.location.href='".$extra."'</script>";
        exit();
    }
    else
    {
        $_SESSION['action1']="*Sai tài khoản hoặc mật khẩu";
        $extra="index.php";
        echo "<script>window.location.href='".$extra."'</script>";
        exit();
    }
}

?>


<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Đăng nhập quản trị | Website quản trị v2.0</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main1.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
</head>

<body>
    <div class="limiter" id="login-page">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/team.jpg" alt="IMG" />
                </div>
                <form class="login100-form validate-form" action="" method="post">
                    <span class="login100-form-title">
                        <b>ĐĂNG NHẬP</b>
                    </span>
                    <p style="color:#F00; padding-top:20px;" align="center">
                        <?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?>
                    </p>
                    <form action="" name="login" method="post">
                        <div class="wrap-input100 validate-input">
                            <input type="text" name="username" class="input100" placeholder="Tài khoản" autofocus />
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-user'></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input autocomplete="off" type="password" name="password" class="input100" placeholder="Mật Khẩu" id="password-field">
                            <span toggle="#password-field" class="bx fa-fw bx-hide field-icon click-eye"></span>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-key'></i>
                            </span>
                        </div>
                        <div class="container-login100-form-btn">
                            <input name="login" class="btn btn-theme btn-block" type="submit" />
                        </div>

                    </form>
                    <div class="text-center p-t-70 txt2">
                        Trường THPT Yên Dũng số 2 <i class="far fa-copyright" aria-hidden="true"></i>
                        <script type="text/javascript">
                            document.write(new Date().getFullYear());
                        </script><a class="txt2" href="https://www.facebook.com/thptyd2"> @thptyd2 </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/js/main.js"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text"
            } else {
                x.type = "password";
            }
        }
        $(".click-eye").click(function() {
            $(this).toggleClass("bx-show bx-hide");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>



</body>
</html>
