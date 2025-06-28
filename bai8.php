<!-- câu lệnh switch case -->
 <?php
    $so = 5;
    switch ($so){
        case 1:
            echo 'một';
            break;
        case 2: 
            echo 'hai';
            break;
        case 3:
            echo 'ba';
            break;
        case 4:
            echo 'bốn';
            break;
        case 5:
            echo 'năm';
            break;
        default:
            echo " số nằm ngoài phạm vi";
            break;

    }
    ?>

    <?php
    // Switch lồng 
    $so = 5;
        switch($so){
            case 1:
                echo 'một';
                break;
            default;
                switch ($so){
                    case 2:
                        echo ' hai';
                        break;
                    case 3:
                        echo " ba";
                        break;
                    case 4:
                        echo "bốn";
                        break;
                    case 5:
                        echo ' năm';
                        break;
                    default:
                        echo "Số ngoài phạm vi"
                        break;

                }
        }
    ?>