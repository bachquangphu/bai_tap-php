<!--hàm xử lý mảng  -->
<?php
//count($array): xem trong mảng có bao nhiêu phần tử
$array = [
    'toidicode.com',
    'website học lập trình online'
];
echo count($array) . '<br>'; // ->2
?>

<?php
//array_values($array): đưa mảng về dạn mảng tuần tự
$array = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online'
];
print_r(array_values($array)); //->Array ( [0] => toidicode.com [1] => website học lập trình online )
?>

<?php
//array_keys($array): trả về một mảng tuần tự với phần tử là key của mảng ban đầu
$array = [
    'domain' => 'toidicode.com',
    'description' => 'website học lập trình online'
];
echo '<br>';
print_r(array_keys($array)); //->Array ( [0] => domain [1] => description )
?>

<?php
//array_pop($array): trả về phần tử cuối cùng của mảng
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
echo '<br>';
print_r(array_pop($array)); //->Website học lập trình online
?>

<?php
//array_push($array,$var,$var,...):thêm vào một hay nhiều phần tử vào cuối mảng và trả về số lượng phần tử của mảng sau khi thêm
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
echo '<br>';
print_r(array_push($array, 'miễn phí nhé', 'bach quang phu')); //->4
?>

<?php
//array_shift($array): xá phần tử đầu tiên của mảng và trả về phần tử vừa xóa
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
echo '<br>';
print_r(array_shift($array)); //->toidicode.com
?>

<?php
//array_unshift($array,$var,$var,...): thêm một hoặc nhiều phần tử vào đầu mảng và trả về số lượng phần tử của mảng sau khi thêm 
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
echo '<br>';
print_r(array_unshift($array, 'bach quang phu', 'phu')); //->4
?>

<?php
//array_flip($array): chuyển đổi key của mảng thành value và ngược lại
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
echo '<br>';
print_r(array_flip($array)); //->Array ( [toidicode.com] => domain [Website học lập trình online] => description )
?>

<?php
//soft($array): sắp xếp lại mảng theo chiều tăng dần và trả về true nếu thành công và false nếu không thành công
$array = [5, 4, 3, 1, 2];
sort($array);
echo '<br>';
print_r($array); //->Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
?>

<?php
//array_reverse($array): đảo ngược lại vị trí của các phần tử trong mảng
$array = [5, 4, 3, 1, 2];
echo '<br>';
print_r(array_reverse($array)); //->Array ( [0] => 2 [1] => 1 [2] => 3 [3] => 4 [4] => 5 )
?>

<?php
//array_merge($array,$array,...): gộp 2 hay nhiều mảng thành một mảng
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
$array1 = [5, 4, 3, 1, 2];
echo '<br>';
print_r(array_merge($array, $array1)); //->Array ( [domain] => toidicode.com [description] => Website học lập trình online [0] => 5 [1] => 4 [2] => 3 [3] => 1 [4] => 2 )
?>

<?php
//array_rand($array,$number):lấy ra key ngẫu nhiên trong mảng với number là số lượng mún lấy
$array = [5, 4, 3, 1, 2];
echo '<br>';
print_r(array_rand($array, 2)); //->Array ( [0] => 1 [1] => 4 )
?>

<?php
// array_search($keyword,$array): tìm kiếm giá trị của phần tử và trả về key của phần tử đó
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
echo '<br>';
print_r(array_search('toidicode.com', $array)); //->domain
?>

<?php
//array_slice($array,$begin,$length): lấy ra $length phần bắt đầu từ $begin trong mảng
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
echo '<br>';
print_r(array_slice($array, 0)); //->Array ( [domain] => toidicode.com [description] => Website học lập trình online )
echo '<br>';
print_r(array_slice($array, 0, 1)); //->Array ( [domain] => toidicode.com )
?>

<?php
//array_unique($array): loại bỏ các giá trị trùng nhau trong mảng và trả về mảng sau khi loại bỏ các giá trị trùng
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'phu' => 'bachquangphu',
    'phu' => 'bachquangphu',
    'phu' => 'bachquangphu',
    'ph' => 'bachquangphu'
];
echo '<br>';
print_r(array_unique($array)); //->Array ( [domain] => toidicode.com [description] => Website học lập trình online [phu] => bachquangphu )
?>

<?php
//serialize($input): chuyển đổi một chuỗi, số, mảng, object thành một chuỗi được mã hóa
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'phu' => 'bachquangphu'
];
echo '<br>';
print_r(serialize($array)); //->a:3:{s:6:"domain";s:13:"toidicode.com";s:11:"description";s:33:"Website học lập trình online";s:3:"phu";s:12:"bachquangphu";}
?>

<?php
//unserialize: decode chuỗi được mã hóa bằng serialize
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'phu' => 'bachquangphu'
];
echo '<br>';
print_r($a = serialize($array)); //->a:3:{s:6:"domain";s:13:"toidicode.com";s:11:"description";s:33:"Website học lập trình online";s:3:"phu";s:12:"bachquangphu";}
echo '<br>';
print_r(unserialize($a)); //->Array ( [domain] => toidicode.com [description] => Website học lập trình online [phu] => bachquangphu )
?>

<?php
//array_key_exists($key,$array): kiểm tra xem mảng $array có tồn tại $key nay không nếu tồn tại trả về true ngược lại là false
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'phu' => 'bachquangphu'
];
echo '<br>';
print_r(array_key_exists('phu', $array)); //->1
echo '<br>';
print_r(array_key_exists('ph', $array)); // không trả giá trị vì không có key 'ph'
?>

<?php
//in_array($value,$array): kiểm tra xem mảng $array có tồn tại giá trị $value hay không. Nếu có trả về true ngược lại false
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'phu' => 'bachquangphu'
];
print_r(in_array('toidicode.com', $array)); //->1
?>

<?php
//array_diff($array,$array1,$array2,...): trả về mảng có chứa các phần tử trong mảng $array NHƯNG KHÔNG CÓ trong mảng $array1, $array2,...
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'phu' => 'bachquangphu'
];
$array1 = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'phu' => 'bachquangphu',
    'ph' => 'phu'
];
echo '<br>';
print_r(array_diff($array1, $array)); //->Array ( [ph] => phu )
?>

<?php
//array_diff_assoc($array,$array1,..): trả về một mảng có chứa cách key trong mảng $array mà trong mảng $array1 KHÔNG CÓ
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'phu' => 'bachquangphu'
];
$array1 = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'phu' => 'bachquangphu',
    'ph' => 'phu'
];
echo '<br>';
print_r(array_diff_assoc($array1, $array)); //->Array ( [ph] => phu )
?>

<?php
//array_intersect($array,$array1,...): trả về mảng có các phần tử giống nhau nhau về $value giữa các mảng
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'phu' => 'bachquangphu'
];
$array1 = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'phu' => 'bachquangphu',
    'ph' => 'phu'
];
echo '<br>';
print_r(array_intersect($array1, $array)); //->Array ( [domain] => toidicode.com [description] => Website học lập trình online [phu] => bachquangphu )
?>

<?php
//array_intersect_assoc($array,$array1,...): trả về mảng chứa các phần tử GIỐNG NHAU về key VÀ CẢ value có trong các mảng $array,$array1,...
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'ph' => 'bachquangphu'
];
$array1 = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'phu' => 'bachquangphu',
    'ph' => 'phu'
];
echo '<br>';
print_r(array_intersect_assoc($array, $array1)); //->Array ( [domain] => toidicode.com [description] => Website học lập trình online )
?>

<?php
//is_array($array): kiểm tra xem một biến có phải mảng hay không, trả về true nếu là mảng ngược lại là false
$array1 = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'phu' => 'bachquangphu',
    'ph' => 'phu'
];
$a = 'bachquangphu';
print_r(is_array($array)); //->1
print_r(is_array($a));//-> không trả kết quả vì $a khổng phải mảng
