<!-- vòng lặp while  và do while-->
<?php
//vòng lặp while
 // vd in ra số từ 1-10 
 $i = 0;// khởi tạo biến
    while ($i <= 10){//điều kiện dừng
        echo $i . '<br>'; //in ra Số
        $i++; // sau mỗi lần lặp i sẽ tăng
    }
?>

<?php
// vòng lặp do while
// vd in ra từ 1-10
    $i = 0;//khởi tạo biến
    do{
        echo "$i <br>";//thự hiện câu lệnh
        $i++;// cộng thêm 1 đơn vị sau mỗi lần lặp
    }while($i <= 10);// nếu $i mà lớn hơn 10 vòng lặp sẽ dừng
?>

<?php
// vòng lặp while và do while lòng  nhau
//vẽ tam giác vuông với while và do while
    $i = 0;
    while( $i <= 10){
        $j = $i;
        while ($j <= 10){
            echo "*";
            $j++;
        }
        echo "<br>";
        $i++;
    }
?>

<?php
    $i = 0; 
    do{
      $j = $i;
      do{
        echo "*";
        $j++;
    }while($j <= 10);
    echo '<br>';
    $i++;
    }while($i <=10);
?>