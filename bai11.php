<!-- hàm  -->
<?php
    $a = 4;
    $b = 5;
    function tinhTong($a,$b)// hàm có giá trị trả về
    {
        return $a + $b;
    }
    echo tinhTong($a,$b);
?>

<?php
    $a = 5;
    $b = 7;
    function tong($a,$b)// hàm số không có giá trị trả về
    {
        echo ($a + $b);
    }
?>
<?php
    // giá trị mặc định cho biến truyền vào
    function redName($name = 'world')
    {
        return 'Hello2'. $name;
    }
    $name = redName('phu');
     echo $name;
?>

<?php
// gọi tên hàm
    function readName($name = 'world')// khởi ạo và thiết lập hàm
    {
        echo '<br>hello ' . $name;
    }
    readName();// gọi hàm không truyền tham số -> hello world
    readName('Tài'); //gọi hàm có truyền tham số -> hello Tài
    $a = 'Bach Quang Phu';// khởi tạo biến
    readname($a);// gọi hàm -> hello Bach Quang Phu
?>

<?php
// hàm với câu lệnh rẻ nhánh
/* vd: viết hàm số kt số nếu số đó lớn 10 thì in ra lớn hơn 10 
nếu nhỏ hơn 10 thì xuất nhỏ hơn 10*/
    function checkNumber($number = 0)// khởi tạo hàm checkNumber có tham số truyền vào và đồng thời xét tham số mặc định của nó =0
    {
        if($number >10 ){// nếu số truyền vào lớn hơn 10
            echo '<br>Lớn hơn<br>';
        }else{
            echo '<br>nhỏ hơn hoặc bằng ';
        }
    }
    checkNumber();// gọi hàm không truyền tham số -> kết quả: nhỏ hơn hoặc bằng (0< 10)
    checkNumber(11);// gọi hàm có truyền tham số -> kết quả Lớn hơn (11 > 10)
?>

<?php
    //Hàm với vòng lặp 
    //vd: viết hàm in ra các số từ 1 đến n với n là tham số tùy chỉnh
    function loopNumber($number = 0)// khởi tạo hàm loopNumber có tham số truyền  vào và đặt giá trị mặc định =0
    {
        for ( $i = 0; $i <= $number; $i++){
            echo ' ' . $i;
        }
    }
    loopNumber();// không truyền tham số kết quả là 0
    loopNumber(10);// có truyền tham số kết quả là 0 1 2 3 4 5  6 7 8 9 10
?>

<?php
    // kiểm tra hàm đã tồn tại
    function_exists('loopNumber');
    if (!function_exists('loopNumber')){
        function loopNumber($number = 0)
        {
            for ( $i = 0; $i <= $number; $i++){
                echo $i;
            }
        }
    }