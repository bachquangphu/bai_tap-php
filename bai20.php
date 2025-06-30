<!-- xử lý ngày tháng trong php -->
<?php
//date_default_timezone_set(): thiết lập múi giờ
/*date_default_timezone_set(time_zone_identifier)
trong đó time_zone_identifier: là tên timezone mà mình mún xét*/
date_default_timezone_set('Asia/Ho_Chi_Minh');
//LƯU Ý : HÀM NÀY PHẢI ĐẶT Ở ĐẦU FILE ĐỂ CODE PHÍA SAU ĐƯỢC HOẠT ĐỘNG BÌNH THƯỜNG
// để xem danh sách cách timezone mà php hỗ trợ thì dùng đoạn code sau
/*foreach (timezone_abbreviations_list() as $abbr => $timezone) {
    foreach ($timezone as $val) {
        if (isset($val['timezone_id'])) {
            var_dump($abbr, $val['timezone_id']);
        }
    }
}*/

//date(format, timestamp): định dạng ngày tháng
// format là định dạng thời gian mà bạn muốn xuất ra
//timestamp là thời gian truyền vào (int) nếu để trống thì mặt định  lấy thời gian hiện tại
/* 1 số định dạng thường gặp (còn lại không nhớ thì tra google)
h: trả về giờ trong 12h 
H: là trả về giờ trong 24h
s: trả giây trong phút
i: trả về phút trong giờ
d: là trả về ngày trong tháng
j: là trả về ngày trong tháng nhưng ngày <10 thì hiển thị 0
D: là trả về dạng thứ trong tuần bằng tiếng anh
I: trả về đầy đủ thứ trong tuần
m: là trả về tháng trong năm bằng số
M: là trả về tháng trong năm bằng từ viết tắt trong tiếng anh
y: là trả 2 số cuối của năm
Y: trả về đầy đủ số
*/
echo date('D d-m-Y  H:i:s'); //->Mon 30-06-2025 21:52:03

// truyền chuỗi vào trong hàm date đặt trước các kí tự muốn truyền dấu \
echo '<br>';
echo date('\B\â\y \g\i\ờ \l\à D d-m-Y  H:i:s'); //->Bây giờ là Mon 30-06-2025 21:57:07

//strtotime(time)để chuyển dữ liệu ngày về kiểu intdi
echo '<br>';
echo strtotime(date('d-m-Y H:i:s')); //->1751295682

//date_format: để chuyển đổi ngày tháng 
$date = date_create("2000-04-12");
echo '<br>';
echo date_format($date, "d/m/Y H:i:s"); //->12/04/2000 00:00:00

//date_modify(): để tính toán đặc biệt như cộng trừ thêm ngày
$date = date_create("2000-04-12");
date_modify($date, "+ 11 days");
echo '<br>';
echo date_format($date, "d / m / Y"); //->23 / 04 / 2000

//get_date: chuyển ngày tháng về mảng
echo '<pre>';
print_r(getdate());
echo '</pre>';
/*->Array
(
    [seconds] => 23
    [minutes] => 12
    [hours] => 22
    [mday] => 30
    [wday] => 1
    [mon] => 6
    [year] => 2025
    [yday] => 180
    [weekday] => Monday
    [month] => June
    [0] => 1751296343
)*/
?>