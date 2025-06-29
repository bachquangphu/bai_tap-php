<?php
    $errors= [];
    if(!isset($_POST['ho_ten']) || !isset($_POST['email']) || !isset($_POST['tieu_de']) || !isset($_POST['noi_dung']))
    {  $errors[0] =" dữ liệu không có vui lòng kiểm tra lại";
    }else{
        //kiểm tra họ tên
        $kt_ho_ten = trim($_POST['ho_ten']);
        if ($kt_ho_ten ===""){
             $errors[1] ="<br>Họ tên không được để trống" ;
        }else{
            if (strlen($kt_ho_ten) >= 50){
             $errors[2]="<br>Họ Tên quá dài vui lòng kiểm tra lại"; 
            }
        }
            //kiểm tra email
        $kt_email = trim($_POST['email']);
        if (empty($kt_email)){
            $errors[3] = "<br>email không được để trống";
        }else{
            if (!filter_var($kt_email, FILTER_VALIDATE_EMAIL)){
                $errors[4] = "<br>email không hợp lệ vui lòng kiểm tra lại";
            }
        }
        //kiểm tra tiêu đề 
        $kt_tieu_de = trim($_POST['tieu_de']);
        if (empty($kt_tieu_de)){
            $errors[5] = "<br>tiêu đề không được để trống";
        }else{
            if (strlen($kt_tieu_de) > 100){
                $errors[6] = " <br>tiêu đề quá dàu vui lòng kiểm  tra lại";
            }
        }
        // kiểm tra phần nội dung
        $kt_noi_dung = trim($_POST['noi_dung']);
        if (empty($kt_noi_dung)){
            $errors[7] = "<br> nội dung không được để trống vui lòng kiểm tra lại"; 
        }else{
            $ngat_dong = nl2br($kt_noi_dung);
        }
        if (empty($errors)){
            echo "Gửi mail thành công";
            echo "<br>Họ tên: " . $_POST['ho_ten'];
            echo "<br>Email: " . $_POST['email'];
            echo "<br>Tiêu đề: " . $_POST['tieu_de'];
            echo "<br>Nội dung: " . htmlspecialchars($ngat_dong);
        }else{
            foreach( $errors as $value) {
                echo $value;
            }
        }
    } 
    
    
?>