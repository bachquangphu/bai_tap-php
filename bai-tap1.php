<!-- bài 1 -->
 <?php
 /*### Bài tập 1: Tính toán và Phân loại Điểm số

**Yêu cầu:** Viết một đoạn mã PHP thực hiện các bước sau:

1.  Khai báo ba biến `$diemToan`, `$diemVan`, `$diemAnh` với các giá trị điểm số bất kỳ (kiểu số thực, ví dụ: `7.5`, `8.0`, `6.5`).
2.  Tính **điểm trung bình** của ba môn học này và lưu vào biến `$diemTrungBinh`.
3.  Sử dụng cấu trúc **`if-else if-else`** để phân loại học lực dựa trên `$diemTrungBinh` theo quy tắc sau:
    - `>= 8.5`: "Giỏi"
    - `>= 7.0`: "Khá"
    - `>= 5.0`: "Trung bình"
    - `< 5.0`: "Yếu"
4.  In ra màn hình điểm trung bình và học lực tương ứng.*/
?>
<?php  
    $diemToan = 7.5;
    $diemVan = 8.5;
    $diemAnh = 6.5;
    $diemTrungBinh = ($diemToan + $diemVan + $diemAnh) /3;
    echo $diemTrungBinh . "<br/>";
    echo "Điểm trung bình là " . $diemTrungBinh;
    if($diemToan <= 10 && $diemVan <= 10 && $diemVan <= 10){
        if ( $diemTrungBinh < 5.0 ){
            echo "</br> học lực: Yếu" ;
        }elseif($diemTrungBinh >= 5.0 && $diemTrungBinh < 7.0 ){
            echo  "</br> học lực: Trung Bình" ;
        }elseif($diemTrungBinh >= 7.0 && $diemTrungBinh < 8.5 ){
            echo "</br> học lực: Khá" ;
        }elseif($diemTrungBinh >= 8.5 ){
            echo "</br> học lực: Giỏi" ;
        }
    }else{
        echo "Điểm không phù hợp vui lòng nhập lại";

    }
?>


