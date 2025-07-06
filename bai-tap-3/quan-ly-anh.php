<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (isset($_POST['upload-img']) && isset(($_FILES)['input-img'])) {
    $uploads = count($_FILES['input-img']['name']);
    for ($i = 0; $i < $uploads; $i++) {
        $name = $_FILES['input-img']['name'][$i];
        $tmp_name = $_FILES['input-img']['tmp_name'][$i];
        $size = $_FILES['input-img']['size'][$i];
        $type = $_FILES['input-img']['type'][$i];
        $error = $_FILES['input-img']['error'][$i];
        if ($error === 4) {
            echo " vui lòng chọn ít nhất 1 ảnh để tải lên <br>";
        } elseif ($error > 0 && $error != 4) {
            echo "ảnh thứ $i đã xảy ra lỗi vui lòng thử lại <br>";
        } else {
            $allow = ['jpg', 'jpeg', 'png', 'gif'];
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            if (in_array($extension, $allow)) {
                $new_name = 'img_' . date('Ymd_His') . '_' . rand(1, 999) . '.' . $extension;
                if (!file_exists('uploads/')) {
                    mkdir('uploads', 0777, true);
                }
                move_uploaded_file($tmp_name, 'uploads/' . $new_name);
                $file = fopen('list-images.txt', 'a');
                $write = fwrite($file, $new_name . PHP_EOL);
                fclose($file);
                // echo "<img src = 'uploads/$new_name' style = 'width: 500px;'> <br>";
                // echo 'Tên ảnh: ' . $new_name . '<br>';
                // echo 'Loại ảnh: ' . $type . '<br>';
                // echo 'Dung lượng: ' . number_format($size / 1024) . 'kb <br>';
                // echo 'Thời gian tải lên: ' . date('d-m-Y H:i:s') . '<br> <br> <br> <br>';
            } else {
                echo $name . ' ảnh không hợp lệ vui lòng kiểm tra lại';
                exit;
            }
        }
    }
    $list_img = file('list-images.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($list_img as $img) {
        echo "<img src='uploads/$img' style='width: 500px;'><br>";
        echo 'Tên ảnh: ' . $img . '<br>';
    }
} else {
    echo 'có lỗi vui lòng thử lại<br>';
}
