<!-- biến -->
 <?php
    // đúng
    $php = "hello";
    $_php = " hello";

    //đặt sai
    // $5php = 'hello'; sai vì bắt đầu bằng số 
    // -php= 'hello'; sai vì bắt đầu bằng -

    //php phân biệt chữ hoa và thường $A khác với $a

    ?> 
<?php
    $toidicode = 'website học lập trình online miễn phí';
    echo $toidicode; // in biến
?>

<?php
    $frist ='hello';
    echo $frist;
    echo "<br/>";
    $frist = 'hello world';
    echo $frist;
?>
 
<!-- hằng -->
 <?php
    // cú pháp khai báo hằng
    define('tenHang', ' giaTri');
    // vd
    define('NAME', 'Bach Quang Phu');
?>
<?=
 define('NAME', 'Bach Quang Phu');
 echo NAME; // in hằng
?>


