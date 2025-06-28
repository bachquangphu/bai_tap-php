<!-- bài 2 -->
<?php
/*### Bài tập 2: Xử lý Tháng trong Năm

**Yêu cầu:** Viết một đoạn mã PHP thực hiện các bước sau:

1.  Khai báo một biến `$thang` kiểu số nguyên, gán một giá trị bất kỳ từ 1 đến 12 (ví dụ: `3` cho tháng 3).
2.  Sử dụng cấu trúc **`switch`** để hiển thị tên của tháng tương ứng với giá trị của biến `$thang`.
    - Ví dụ: Nếu `$thang = 1`, in ra "Tháng Một".
    - Nếu giá trị không nằm trong khoảng 1-12, in ra "Giá trị tháng không hợp lệ."
3.  Sau đó, sử dụng cấu trúc **`if-else`** để kiểm tra xem `$thang` có phải là tháng của quý 2 (tháng 4, 5, 6) hay không. Nếu có, in ra "Đây là tháng thuộc quý 2." Ngược lại, in ra "Đây không phải tháng thuộc quý 2." */
?>
<?php
    $thang = 8;
    if($thang <= 12 && $thang >= 0){
        switch($thang){
            case 1:
                echo "Tháng Một";
                break;
            case 2:
                echo "Tháng Hai";
                
                break;
            case 3:
                echo "Tháng Ba";
                break;
            case 4:
                echo "Tháng Tư";
                break;
            case 5:
                echo "Tháng Năm";
                break;
            case 6:
                break;
            case 7:
                break;
            case 8:
                echo "Tháng Tám";
                break;
            case 9:
                echo "Tháng Chín";
                break;
            case 10:
                echo "Tháng Mười";
                break;
            case 11:
                echo "Tháng Mười Một";
                break;
            case 12:
                echo "Tháng Mười hai";
                break;
            default:
                echo "Giá trị không hợp lệ";
                break;
        }
        if($thang == 3 || $thang == 4 || $thang == 5){
                echo "<br>Đây là tháng thuộc quý 2 <br>";
            }else{
                echo "<br>Đây không phải tháng thuộc quý 2";
            }
    }else{
        echo 'Dữ liệu không phù hợp vui lòng nhập lại';
    }
?>

    
