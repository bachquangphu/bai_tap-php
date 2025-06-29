<!-- các hàm trong chuỗi -->
<?php
// nếu bạn sử dụng dấu nhấy "" để in ra chuỗi thì khi chèn chuỗi bạn sẽ không phải nối chuỗi
    $variable = 'toidicode.com';
    echo ("Webside học lập trình online $variable");// ->Webside học lập trình online toidicode.com
    // nếu khi sử dụng dấu nháy ""  để in ra mà trong chuỗi có dấu " thì bạn phải thêm kí tự \ trước nó
    echo ("<br>anh ấy nói \"Toidicode dạy lập trình online \"");
    //tương tự với dấu ''
    echo ('<br>anh ấy nói \'Toidicode dạy lập trình online \'');
?>

<?php
 // các hàm sử lý chuỗi thông dụng
    //addcslashes($str,$char_list): chèn \ vào trước kí tự trong chuỗi $str với các kí tự được liệt kê ở $char_list
    echo addcslashes("<br>toidicode.com", 'o');// ->t\oidic\ode.c\om
    echo '<br>'. addcslashes("Toidicode", 'a..z');//->T\o\i\d\i\c\o\d\e
    echo '<br>'. addcslashes("Toidicode.com", 'a..zA..Z');//->\T\o\i\d\i\c\o\d\e.\c\o\m

    //addslashes("$str"): thêm kí tự \ vào trước kí tự ' và " trong chuỗi $str
    echo '<br>'. addslashes("To'id'icod'e.com");//->To\'id\'icod\'e.com

    //bin2hex("$str"): chuyển đổi chuỗi về dạng ASCII HEX của tường ký tự trong chuỗi $str
    echo '<br>' . bin2hex("bachquangphu");//->626163687175616e67706875

    //chop("$string","$char_list"): xóa kí tự hoặc từ ở cuối chuỗi nếu nó là $char_list
    echo '<br>'. chop("Bạch Quang Phú Bạch", "Bạch");//->Bạch Quang Phú

    //crc32($string): chuyển một chuỗi thành số nguyên
    echo '<br>'. crc32("bachquangphu") . '<br>';//->3083229544

    //explode($separator,$string,$limit): tách chuỗi $string thành nhìu chuỗi khác với điều kiện $separator và giới hạn limit
    $data = explode('o', "Toidicode.com");
    print_r($data);//->Array ( [0] => T [1] => idic [2] => de.c [3] => m )
    $data = explode('o',"Toidicode.com",2);
    echo ('<br>');
    print_r($data);//->Array ( [0] => T [1] => idicode.com )

    //implode($separator,$array): nối các phần tử của mãng thành chuỗi với khoảng phân biệt là $separator
    $data = [
    'Toi',
    'D',
    'i',
    'co',
    'de',
    '.com'
    ];
    echo '<br>'. implode($data). "<br>";//->ToiDicode.com
    echo implode('-',$data);//->Toi-D-i-co-de-.com

    //strlen($string): đếm xem chuỗi $string có bao nhieu kí tự
    $data = "bach quang phu";
    echo '<br>'. strlen($data);//->14

    //str_word_count($string): đếm trong chuỗi $string có bao nhiêu từ
    $data = "bach quang phu";
    echo '<br>'. str_word_count($data);//->3

    //str_repeat($string,$repeat): lặp lại chuỗi $string $repeat lần
    $data = "bach quang phu";
    echo '<br>'. str_repeat($data,3); //->bach quang phubach quang phubach quang phu

    //str_($find,$replae,$string):tìm kiếm cuỗi $find và thay thế chuỗi đó bằng chuỗi $replace trong chuỗi $string
    $data = "bach quang phu";
    echo '<br>'. str_replace("b","B",$data);//->Bach quang phu

    //md5($string): chuyển chuỗi $string sang mã hóa md5
    $data = "bach quang phu";
    echo '<br>'. md5($data);//->e85fc347a3663af40f5b75ecfc2fd1bb

    //sha1($string): mã hóa chuỗi $string sang sha1
    $data = "bach quang phu";
    echo '<br>'. sha1($data);//->c4940a8606ed29f04ad886884cf41f51555690af

    //htmlentities($string), htmlspecialchars($string): chuyển hóa dữ liệu sang dạng thô
    $data = "<b>bach quang phu</b>";
    echo '<br>'. htmlentities($data);//-><b>bach quang phu</b>

    $data = "<b>bach quang phu</b>";
    echo '<br>'. htmlspecialchars($data);//-><b>bach quang phu</b>

    //htmlspecialchars_decode, html_entity_decode: chuyển đổi dữ liệu về dạng thực của nó
    $data = "<b>bach quang phu</b>";
    echo "<br>" . htmlspecialchars_decode($data);//->bach quang phu( chữ in đậm)
    echo "<br>" . html_entity_decode($data);//->bach quang phu (chữ in đậm)

    //strip_tags($string,$allow): loại bỏ các thẻ html trong $string trừ những thẻ được cho phép $allow
    $data = "<b>bach quang phu</b>";
    echo "<br>" . strip_tags($data);//->bach quang phu
    echo "<br>" . strip_tags($data,'<b>');//->bach quang phu( in đậm)

    //substr(string,start,length): cắt chuỗi $string, bắt đầu từ start có giới hạn length
    echo '<br>' . substr("Hello world",10) ."<br>";//->d
    echo substr("Hello world",-1) ."<br>";//->d
    echo substr("Hello world",0,-1) ."<br>";//->Hello worl
    echo substr("Hello world",0,10) ."<br>";//->Hello worl

    //strtolower($string): chuyển chuỗi $string sang in thường
    echo strtolower("BACH QUANG PHU") . '<br>';//->bach quang phu

    //strtoupper($string): chuyển chuỗi $string sang in hoa
    echo strtoupper("bach quang phu") . '<br>';//->BACH QUANG PHU

    //ucword($string): chuyển các chữ cái đầu tiên của từ trong chuỗi sang in hoa
    echo ucwords("bach quang phu") . '<br>';//->Bach Quang Phu

    //ucfirst($string) chuyển đổi chữ cái đầu tiên của chuỗi sang in hoa
    echo ucfirst(" bach quang phu ") . '<br>';//->Bach quang phu

    //trim($string,$charlist): loải bỏ khoảng trắng hoặc các kí tự $charlist trong chuỗi $string
    echo trim(" bach quang phu ") . '<br>';//->bach quang phu
    echo trim("Babach quang Phu",'B') . '<br>';//->abach quang phu

    //ltrim($string,$charlist): tương tự như hàm trim nhưng chỉ cắt bên trái chuỗi
    echo ltrim("vbach quang Phu",'v') . '<br>';//->bach quang Phu

    //rtrim($string,$charlist); tương tự như hàm trim nhưng cắt bên phải chuỗi
     echo rtrim("bach quang Phu",'u') . '<br>';//->bach quang Ph





