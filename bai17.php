<!-- các hàm xử lý file  -->
<?php
/*fopen(command,mode): dùng để mở file trong trong php
 command: đường dẫn file
 mode: quyền truy cập file (tra google)*/
$file = @fopen('data.txt', 'r'); //dùng @kểu ngặn chặn trong báo lỗi nếu trỏ sai đường dẫn file
if (!$file) {
    echo " mở file không thành công";
} else {
    echo "Mở file thành công";
}
?>

<?php
// Đọc file
//đọc từng kí tự
// dùng hàm feof để xem đã ở vị trí cuối cùng của file hay chưa
//fgetc để đọc từng kí tự của file
$file = @fopen('data.txt', 'r');
if (!$file) {
    echo "mở file không thành công";
} else {
    while (!feof($file)) { // hàm feof sẽ trả về true nếu đang nằm cuối của file
        echo fgetc($file); // fgetc đọc ra từng kí tự của file
    }
    echo '<br>';
    echo '<br>';
}
?>

<?php
//Đọc từng dòng
/* vẫn dùng feof để xem đã ở cuối của file hay chưa
dùng fgets để in ra từng dòng của file */
$file = @fopen('data.txt', 'r');
if (!$file) {
    echo "Mở file không thành công";
} else {
    while (!feof($file)) { // hàm feof trả về true nếu ở cuối file
        echo fgets($file); // fgets in ra từng dòng của file
    }
    echo '<br>';
    echo '<br>';
}
//Có thể dùng hàm file để chuyển file sang dạng mảng với mổi dòng là một phần tử của mảng
$data = @file('data.txt');
foreach ($data as $value) {
    echo $value . '<br>';
}
echo '<br>';
echo '<br>';
?>

<?php
// đọc hết file 
// dùng hàm fread($file,$filesize)
$file = @fopen('data.txt', 'r');
if (!$file)
    echo "Mở file không thành công";
else {
    // echo fread($file, filesize('data.txt')); //filesize lấy ra dung lượng của file
    $a = filesize('data.txt');
    echo $a;
    echo '<br>';
    // echo fread($file, filesize('data.txt') / 5); // fread chỉ read 1 lần của cùng file
}
?>

<?php
// ghi file
// để ghi file buộc phải mở chế độ mode cho phép ghi file
// dùng hàm fwrite để ghi dữ liệu
$file = @fopen('phu.txt', 'w');
if (!$file) {
    echo " mở file không thành công";
} else {
    $data = 'tôi đã ghi dòng này';
    fwrite($file, $data);
}
?>

<?php
// đóng file 
// dùng hàm fclose để đóng file ( luôn luôn nhớ có mở thì phải có đóng)
$file = @fopen('data.txt', 'w');
if (!$file)
    echo "Mở file không thành công";
else {
    $data = 'Tôi ghi dòng này vào file nhé!';
    fwrite($file, $data);
    fclose($file);
}
?>

<?php
// các hàm khác 
// file_exists để kiểm tra sự tồn tại của file, true nếu file tồn tại ngược lại là false
if (file_exists('data.txt')) {
    echo 'file tồn tại';
} else {
    echo 'file không tồn tại';
}

// is_writable(): kiểm tra file trả về true khi được ghi file ngược lại là false
if (is_writable('data.txt')) {
    echo 'được phép ghi';
} else {
    echo 'không được phép ghi';
}

//file_get_contents(): để lấy nội dung của file
echo file_get_contents('data.txt');

//mkdir(path,mode,recursive,context): tạo thư mục
mkdir('data1.txt');

//is_dir(): kiểm tra thư mục có tồn tại hay không
if (is_dir('public')) {
    echo 'tồn tại';
} else {
    echo 'không tồn tại';
}

// rename(old,new): để đổi tên file
rename('data.txt', 'new-data.txt');

//copy(path,patch_copy): để copy file
copy('phu.txt', 'newdata.txt');

// unlink() dùng để xóa file
if (unlink('bachquangphu.txt')) {
    echo 'Xóa thành công';
} else {
    echo 'xóa không thành công';
}
