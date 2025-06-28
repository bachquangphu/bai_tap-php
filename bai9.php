<!-- vòng lặp for và foreach -->
 <?php
// vòng lặp for
    for ($i = 0; $i <= 10; $i++){
        echo 'tôi đang chạy đến số ' . $i . '<br/>';
    }
?>

<?php
// vòng lặp foreach
 //  khởi tạo mảng
    $data = [
        'A',
        'B',
        'C',
    ];
    // lặp cả key lẫn value của mảng
foreach ( $data as $key => $value){
    echo "đây là phần tử có key = $key và có giá trị = $value <br/>";
}
//   tạo khoảng cách để dễ phân biệt
    echo "----------------------------------------<br/>";
    foreach($data as $value ){
        echo "giá trị phần tử= $value <br/>";
    }
?>

<?php
// for và foreach lồng
//  for 
for ( $i = 0; $i <= 10; $i++){
    for ($j = $i; $j <= 10; $j++){
        echo "*";

    }
    echo "<br>";
}
// foreach
$data = [0 => 1, 1 => [3 => 4, 5 => 6]];
foreach ($data as $val) {
    if (is_array($val)) {
        foreach ($val as $v) {
            echo $v . "<br/>";
        }
    } else
        echo $val . "<br>";
}
?>