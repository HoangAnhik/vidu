<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>In Câu Chào</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   
</head>
<body>
    <form action = "Bai1.php" method = "POST">
        <p style ="width:300px;line-height:30px; background:teal;border:1px solid;color:white;font-weight: bolder;">In Câu Chào</p>
        <div style = "width: 300px;background: #66CCCC;line-height: 45px;margin-top: -1em;border: 1px solid #ccc;">
        <p> Nhập tên : <input type="text" name = "Ten" value = "<?php $string = (!isset($_REQUEST["Ten"])) ? "" : $_REQUEST["Ten"];
                echo $string; ?>"></p>
        <p>Câu chào : <b><?php $string = (!isset($_REQUEST["Ten"])) ? "" : $_REQUEST["Ten"];
                echo $string; ?> </b> </p>
        <p><input type = "submit" value ="In Câu Chào" ></p>
</div>
    </form>
    
</body>
</html>