<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Bài 4</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   
</head>
<body>
       <?php 
             $user = (!isset($_REQUEST["userName"])) ? "" : $_REQUEST["userName"];
             $Pass = (!isset($_REQUEST["passWord"])) ? "" : $_REQUEST["passWord"];
             $login;
             if ($user == "" && $Pass == "") { 
                $login = "";
            }
            else if ($user == "admin" && $Pass == "123") {
                $login = "Đăng Nhập Thành Công";?>
            <?php
            }
            else { 
                $login = "Sai Tên Đăng Nhập Hoặc Mật Khẩu";?>
                <style>
                    b {
                        color: red;
                    }
                </style>
            <?php 
            }
            ?>

       <form action = "Bai4.php" method ="POST">
            <div style = "background: greenyellow;  padding-left: 20px;  width: 300px; line-height: 3em;">
                <p>UserName : <input type = "text"  name = "userName" value = "<?php echo $user; ?>"></p>
                <p>PassWord : <input type = "password"  name = "passWord" value = "<?php echo $PassWord; ?>"></p>
                <p> <b><?php echo $login; ?></b></p>
                <p><input type = "submit" value = "Đăng Nhập"> </p>
            </div>
      
       </form> 
</body>
</html>