<!--  phương thức GET và POST  -->


<?php
    if (isset($_GET['name']) && isset($_GET['age'])){
        echo 'Tên: ' . $_GET['name'] . '<br>';
        echo 'Tuổi: ' . $_GET['age'] . '<br>';
        echo 'Giới Tính: '. $_GET['sex'];
    }
?>
