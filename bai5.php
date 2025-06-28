<!--  kiểu dữ liệu trong php -->
<?php
//  kiểu int ( số nguyên)
    $a = 1234;// hệ số thập phân
    $a = -123; // số âm
    $a = 01234 // bát phân
    $a = 0x1A; // hệ thập lục
    $a = 0b1111111111; // hệ nhị phân
?>

<?php
// kiểu số thực (float, double, real)
    $float = 5,586;
?>

<?php 
// kiểu boolean
$is_Male = true;
?>

<?php
//  kiểu chuỗi
    $string = 'toidicode.com';
    $string = "toidicode.com";
?>
<?php
    $a = ' toidicode';// khia báo biến a
    $b = 96; // khia báo biến b
    is_string($a);// true
    is_string($b);//false
?>
<!-- // kiểu mảng -->
<?php
// khai báo mảng
    $array = array();
 // hoặc 
    $array = [];

 // khai báo kèm theo giá trị của mảng
    $array = array('giá trị 1', 'giá trị 2');
 //hoặc
    $array = array['giá trị 1', 'giá trị 2'];
?>

<?php
    // hiển thị mảng
    $ten = aarray('Tài', 'Tuấn', 'Hà');
    print_r($ten);
    // in các phần tử của mãng
    echo $ten[0];// Tài
    echo $ten[1];// Tuấn
    echo $ten[2];// Hà
?>


<?php
// thêm phần tử trong mảng
    $TenMang['key'] = 'value';
// ví dụ 
    $arr = array('toi', 'di');
    $arr[2] = code;
    // hoặc
    $arr[] = code;// tự động thêm vào cuối mãng
?>

<?php
// sửa phần tử trong mãng
    $mang['index'] = 'giá trị mới';
?>

<?php
// mảng bất tuần tự
    // khai báo mảng
    $mang = []; 
    
    // thêm mảng
    $mang[] = 'giá trị';
    $mang[] = ' giá trị';
    
    //sửa mảng
    $mang['key'] = 'giá trị mới';
?>

<?php
    // kiểu null( kiểu rỗng)
    $a = null;
?>

<?php
// ép kiểu 
// $bienmoi = (kieudulieu) $bien;
    $a = 9;// biến a có kiểu là int
    $b = (string) $a;// ép kiểu sang string
    var_dump($b); // để kiểm tra xem biến đang ở kiểu dữ liệu nào