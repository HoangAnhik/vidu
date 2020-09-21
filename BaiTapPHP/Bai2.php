<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Bài 2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   
</head>
<body>
     <?php 
          define("PI", 3.14);
          $dienTich = (!isset($_REQUEST["bankinh"])) ?  "" : ((float)$_REQUEST["bankinh"]) * ((float)$_REQUEST["bankinh"]) * PI;
     ?>
    <form action = "Bai2.php" method = "POST">
        <p style ="width:300px;line-height:30px; background:teal;border:1px solid;color:white;font-weight: bolder;">Hình Tròn</p>
        <div style = "width: 300px;background: #66CCCC;line-height: 45px;margin-top: -1em;border: 1px solid #ccc;">
        <p> Bán Kính: <input type="text" name = "bankinh" value = "<?php $banKinh = (!isset($_REQUEST["bankinh"])) ? "" : $_REQUEST["bankinh"];
                echo $banKinh;?>"></p>
        <p> Diện tích : <b> <input type = "text" name = "dientich" value = "<?php echo $dienTich; ?>"> </b> </p>
        <p><input type = "submit" value ="submit" ></p>
</div>
    </form>
    
</body>
</html>