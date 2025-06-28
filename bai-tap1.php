<!-- bài 1 -->
<?php  
    $diemToan = 7.5;
    $diemVan = 8.5;
    $diemAnh = 6.5;
    $diemTrungBinh = ($diemToan + $diemVan + $diemAnh) /3;
    echo $diemTrungBinh . "<br/>";
    if($diemToan <= 10 && $diemVan <= 10 && $diemVan <= 10){
        if ( $diemTrungBinh < 5.0 ){
            echo "Điểm trung bình là " . $diemTrungBinh ."</br> học lực: Yếu" ;
        }elseif($diemTrungBinh >= 5.0 && $diemTrungBinh < 7.0 ){
            echo "Điểm trung bình là " . $diemTrungBinh . "</br> học lực: Trung Bình" ;
        }elseif($diemTrungBinh >= 7.0 && $diemTrungBinh < 8.5 ){
            echo "Điểm trung bình là " . $diemTrungBinh . "</br> học lực: Khá" ;
        }elseif($diemTrungBinh >= 8.5 ){
            echo "Điểm trung bình là " . $diemTrungBinh . "</br> học lực: Giỏi" ;
        }
    }else{
        echo "Điểm không phù hợp vui lòng nhập lại";

    }
?>


