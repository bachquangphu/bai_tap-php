<!-- bài tập 3 -->
 <?php
    $soNguyen = [10, 5, 30, 15, 8];
    foreach($soNguyen as $a ){
        if ($a % 2 == 0){
            echo 'số ' . $a . ' là số chẵn <br>';
        }
 }
/*$b = 0;
    foreach($soNguyen as $a ){
         if ($a % 2 == 0){
             $b = $b + $a ;
         }
     }
    echo 'Tổng cách số chẵn trong mảng bằng ' . $b;*/
    $b =0;
    foreach($soNguyen as $a ){
             $b = $b + $a ;
         }
    echo 'Tổng cách số có trong mảng: ' . $b;
    if ($b % 2 == 0){
        echo "<br> Tổng là số Chẵn";
    }else{
        echo "Tổng là số lẻ ";
    }
    $c = $soNguyen[1];
    foreach($soNguyen as $a ){
        if ($c > $a){
            $c = $a;
        }
    }
    echo "<br> Số nhỏ nhất có trong mãng là". $c;

    
    