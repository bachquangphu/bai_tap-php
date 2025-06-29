<?php
    if (isset($_POST['name']) && isset($_POST['age'])){
    
        echo 'Tên: ' . $_POST['name'] . '<br>';
        echo 'Tuổi: ' . $_POST['age'];
    }
?>
