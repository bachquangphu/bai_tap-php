<!-- các hàm kiểm tra dữ liệu trong php -->
<?php
// isset($a): hàm kiểm tra xem biến $a có tồn tại hay không nếu tồn tại trả true ngược lại là false
$phu = 'bachquangphu';
if (isset($phu)) {
    echo 'biến có tồn tại<br>';
} else {
    echo 'biến không tồn tại<br>';
} //-> biến có tồn tại

//empty($a): hàm có tác dụng kiểm tra $a có rỗng không (số 0 , mảng rỗng, null hay biến không tồn tại thì được coi là rỗng) trã về true nếu biến rỗng ngược lại là false
$data = [];
if (empty($data)) {
    echo 'biến rỗng<br>';
} else {
    echo 'biến không rỗng<br>';
} //-> biến rỗng

// is_string($a) hàm kiểm tra xem biến $a có phải chuỗi hay không nếu là chuỗi trả về true ngược lại là false
$data = [];
if (is_string($data)) {
    echo 'biến này là chuỗi<br>';
} else {
    echo 'biến này không phải chuỗi<br>';
} //-> biến này không phải chuỗi

//is_numeric($a): kiểm tra xem biến $a có phải là số hay không trả về true nếu là số ngược lại là false
$data = 123445;
if (is_numeric($data)) {
    echo 'biến này là số<br>';
} else {
    echo 'biến này không phải là số <br>';
} //-> biến này là số;

//is_int($a): kiểm tra xem $a có phải số nguyên hay không , trả về true nếu là số nguyên ngược lại là false
$data = 1555.5;
if (is_int($data)) {
    echo 'Biến này là số nguyên<br>';
} else {
    echo 'Biến này không phải là số nguyên<br>';
} //-> Biến này không phải số nguyên

//is_integer: có tác dụng như hàm is_int
$data = 15675.56645;
if (is_integer($data)) {
    echo 'Biến này là số nguyên<br>';
} else {
    echo 'Biến này không phải là số nguyên<br>';
} //->Biến này không phải là số nguyên 

// is_float($a): hàm có tác dụng kiểm tra biến có phải kiểu float hay không nếu là float trả về true ngược lại là false
$data = 15675.56645;
if (is_float($data)) {
    echo 'Biến này là kiểu foat<br>';
} else {
    echo 'Biến này không phải kiểu float<br>';
} // Biến này là kiểu float

//is_double($a): có tác dụng kiểm tra xem biến có phải là kiểu double( kiểu số thực nhưng chứa được nhiều số sau dấu phẩy hơn float) hay không nếu là double trả về true ngược lại là false
$data = 1555.5;
if (is_double($data)) {
    echo 'Biến này là double<br>';
} else {
    echo 'Biến này không phải là double<br.';
} //-> Biến này là double

//is_null($a): kiểm tra xem 1 biến có phải là kiểu null hay không;
$data = null;
if (is_null($data)) {
    echo 'Biến này là null<br>';
} else {
    echo 'Biến này không phải là null<br>';
} //-> biến này là kiểu null
?>