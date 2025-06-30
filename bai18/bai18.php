<!-- upload file trong php -->
<?php
/*cũng giống như GET VÀ POST, sever nhận dữ liệu của file qua biến $_FILES và biến $_FILES là 1 mảng 2 chiều có dạng
$_FILES['nameInputFile']['properties']
namInputFile là tên của file input mà đã đặt ở form( trường hợp này mình đặt tên là fileUpload)
properties là là 5 thuộc tính sau:
name: tên file bạn vừa upload
type:kiểu dữ liệu của file
tmp_name: đường dẫn tạm của file ở trên sever
error: trạng thái của file (0 là không có lỗi)
size: dung lượng của file ở đây là bytes

move_uploaded_file($_FILES['nameInputFile']['tmp_name'], destination): để upload hoàn tất việc upload file
$_FILES['nameInputFile']['tmp_name']: đường dẫn tạm của fie trên sever 
destiation; đường dẫn để lưu file
tmp
*/
/*if (isset($_POST['up']) && isset($_FILES['fileUpload'])) {
//     if ($_FILES['fileUpload']['error'] > 0) {
//         echo 'upload lỗi rồi';
//     } else {
//         move_uploaded_file($_FILES['fileUpload']['tmp_name'], "phu/" . $_FILES['fileUpload']['name']);
//         echo "upload thành công <br/>";
//         echo 'Dường dẫn: upload/' . $_FILES['fileUpload']['name'] . '<br>';
//         echo 'Loại file: ' . $_FILES['fileUpload']['type'] . '<br>';
//         echo 'Dung lượng: ' . ((int)$_FILES['fileUpload']['size'] / 1024) . 'KB';
//     }
// }*/
?>

<?php
// hãy upload file html nếu ko phải file html thì báo lỗi
if (isset($_POST['up']) && isset($_FILES['fileUpload'])) {
    if ($_FILES['fileUpload']['error'] > 0) {
        echo 'upload file bị lỗi vui lòng tử lại';
    } else {
        $name = $_FILES['fileUpload']['name'];
        $tmp = $_FILES['fileUpload']['tmp_name'];
        $type = $_FILES['fileUpload']['type'];
        $size = $_FILES['fileUpload']['size'];
        $ten_file = explode('.', $name);
        $duoi_file = end($ten_file);
        $cho_phep = 'html';
        if ($duoi_file === $cho_phep) {
            move_uploaded_file($tmp, "phu/" . $name);
            echo "Up load file thành công <br>";
            echo 'file có tên là: ' . $name . '<br>';
            echo 'loại file: ' . $type . '<br>';
            echo 'dung lượng: ' . number_format($size / '1024') . '<br>';
        } else {
            echo 'file không phải là file html xin vui lòng kiểm tra lại';
        }
    }
} else {
    echo 'vui lòng chọn file html';
}
?>