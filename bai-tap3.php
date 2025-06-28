<!-- bài tập 3 -->
 <?php
    /*### Bài tập 3: Thao tác với Mảng Số nguyên

**Yêu cầu:** Viết một đoạn mã PHP thực hiện các bước sau:

1.  Khai báo một **mảng** `$soNguyen` chứa ít nhất 5 số nguyên bất kỳ (ví dụ: `[10, 5, 20, 15, 8]`).
2.  Sử dụng vòng lặp **`for`** để in ra các số chẵn trong mảng.
3.  Sử dụng vòng lặp **`foreach`** để tính **tổng** của tất cả các số trong mảng.
4.  Sau khi tính tổng, sử dụng **toán tử `%` (modulo)** để kiểm tra xem tổng đó là số chẵn hay số lẻ. In ra kết quả tương ứng (ví dụ: "Tổng là số chẵn." hoặc "Tổng là số lẻ.").
5.  Tìm số lớn nhất trong mảng*/
?>
 <?php
    $soNguyen = [10, 5, 30, 15, 8];
    echo 'các số chẵn có trong mảng là: ';
    for ($i = 0; $i < count($soNguyen); $i++) {
        if ($soNguyen[$i] % 2 == 0) {
            echo $soNguyen[$i] . ', ';
        }
    }
/*$b = 0;
    foreach($soNguyen as $a ){
         if ($a % 2 == 0){
             $b = $b + $a ;
         }
     }
    echo 'Tổng cách số chẵn trong mảng bằng ' . $b;*/
    $tong =0;
    foreach($soNguyen as $a ){
             $tong = $tong + $a ;
         }
    echo '<br>Tổng cách số có trong mảng: ' . $tong;
    if ($tong % 2 == 0){
        echo "<br> Tổng là số Chẵn";
    }else{
        echo "Tổng là số lẻ ";
    }
    $min = $soNguyen[0];
    foreach($soNguyen as $a ){
        if ($min > $a){
            $min = $a;
        }
    }
    echo "<br> Số nhỏ nhất có trong mãng là". $min;

    
    