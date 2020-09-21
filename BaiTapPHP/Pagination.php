<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Pagination</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   
</head>
<body>
    <div id = "content">
       <div id = "tnt_pagination">
            <a href = "Pagination.php?page=<?php $number1 = (!isset($_REQUEST["page"])) ? 1 : $_REQUEST["page"];
                                                 $number1 == 1 ? $number1 = 1 : $number1--;
                                                 echo $number1; ?>">Prev </a>
            <a href = "Pagination.php?page=1">1 </a>
            <a href = "Pagination.php?page=2">2 </a>
            <a href = "Pagination.php?page=3">3 </a>
            <a href = "Pagination.php?page=4">4 </a>
            <a href = "Pagination.php?page=5">5 </a>
            <a href = "Pagination.php?page=6">6 </a>
            <a href = "Pagination.php?page=7">7 </a>
            <a href = "Pagination.php?page=8">8 </a>
            <a href = "Pagination.php?page=9">9 </a>
            <a href = "Pagination.php?page=10">10 </a>
            <a href = "Pagination.php?page=<?php $number1 = (!isset($_REQUEST["page"])) ? 1 : $_REQUEST["page"];
                                                 $number1++; 
                                                 echo $number1;?>">Next </a>
           
       </div>
    </div>
    <div class = "result">
      <?php  $number = (!isset($_REQUEST["page"])) ? "1" : $_REQUEST["page"];
              echo "Bạn đang ở trang thứ ". (String)$number;?>
    </div>
</body>
</html>