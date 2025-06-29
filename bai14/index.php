<?php 
//include cho phép chúng ta import 1 file khác vào file hiện tại và tất những gì ở file khác đều được dùng ở file hiện tại
    showMess();
    include 'function.php';
?>

<?php
    /* include_once cũng cũng có tác dụng như lệnh include nhưng nó chỉ có thể n
    nhúng 1 file 1 lần duy nhất trong 1 file nghĩa là khi nhúng 1 file 2 lần trong cùng  1file thì nó cũng sẽ nhận lần đầu tiên\
    và không báo lỗ*/
    // include và include_once: code bên dưới include và include_one vẫn sẽ chạy dù file được nhúng vào có tồn tại hay không 
    showMess();
    include_once 'function.php';
?>

<?php
    //require và require_once cách dùng tương tự như include và include_once
    // require và require_once: code bên dưới require và require_once sẽ không chạy nếu  nhúng vào 1 file không tồn tại
    require "function.php";
    showMess();
?>

<?php
require_once "function.php";

showMess();
?>