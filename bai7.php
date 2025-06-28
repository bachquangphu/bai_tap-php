<!-- câu điều kiện -->
<?php
//câu lệnh  if 
    $a = 5;
    if ($a > 4){
        echo $a . 'lớn hơn 4';
    }
?>

<?php
// câu lệnh if else
    $tuoi = 19;
    if ($tuoi < 18){
        echo 'bạn chưa đủ 18 tuổi ';
    }else{
        echo 'bạn đã đủ 18 tuổi';
    }
?>

<?php
    // câu lện elseif
    $diem = 5;
    if ($diem < 4){
        echo "Học lại";
    }elseif($diem >= 4 && $diem < 5.5){
        echo 'Loại D';
    }elseif($diem >= 5.5 && $diem < 7){
        echo "loại C";
    }elseif($diem >=7 && $diem < 8.5){
        echo 'Loại B';
    }elseif($diem >= 8.5 && $diem <= 10){
        echo " Loại A";
    }else{
        echo " Điểm không hợp lệ";
    }
?>

<?php
// câu lện if- else lồng vào nhau
   if ($diem <= 10) {
    if ($diem < 4) {
        echo "Học Lại";
    } else if ($diem >= 4 && $diem < 5.5) {
        echo "Loại D";
    } else if ($diem >= 5.5 && $diem < 7) {
        echo "Loại C";
    } else if ($diem >= 7 && $diem < 8.5) {
        echo "Loại B";
    } else if ($diem >= 8.5 && $diem <= 10) {
        echo "Loại A";
    }
} else {
    echo "Điểm không hợp lệ";
}
?> 