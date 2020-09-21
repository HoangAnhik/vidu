<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Bài 3</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   
</head>
<body>
     <?php 
          $Number_1 = (!isset($_REQUEST["soNguyen1"])) ? "" : $_REQUEST["soNguyen1"];
          $Number_2 = (!isset($_REQUEST["soNguyen2"])) ? "" : $_REQUEST["soNguyen2"];
          $SoLonNhat = $Number_1 > $Number_2 ? $Number_1 : $Number_2;
     ?>
    <form action = "Bai3.php" method = "POST">
        <p style ="width:300px;line-height:30px; background:teal;border:1px solid;color:white;font-weight: bolder;">Hình Tròn</p>
        <div style = "width: 300px;background: #66CCCC;line-height: 45px;margin-top: -1em;border: 1px solid #ccc;">
        <p> Nhập Số Nguyên 1: <input type="text" name = "soNguyen1" value = "<?php echo $Number_1;?>"></p>
        <p> Nhập Số Nguyên 2: <b> <input type = "text" name = "soNguyen2" value = "<?php echo $Number_2; ?>"> </b> </p>
        <p>Số Nguyên Lớn Nhất : <?php echo $SoLonNhat; ?></p>
        <p><input type = "submit" value ="OK" ></p>
</div>
    </form>
    
</body>
</html>