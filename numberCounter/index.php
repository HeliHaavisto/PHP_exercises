<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number counter</title>
</head>
<body>
    <?php
        $number = floor(rand(0,100));
        $result = " on ";

        // $result =  $result . "yksi";

        // echo $result;

        // $remainer = $number + 10;
        // echo $remainer;
        
        if( 0 <= $number && $number <= 10) {
            switch ($number) {
                case '0':
                    $result = $result . "nolla";
                    break;
                case '1':
                    $result = $result . "yksi";
                    break;
                case '2':
                    $result = $result . "kaksi";
                    break;
                case '3':
                    $result = $result . "kolme";
                    break;
                case '4':
                    $result = $result . "neljä";
                    break;
                case '5':
                    $result = $result . "viisi";
                    break;
                case '6':
                    $result = $result . "kuusi";
                    break;
                case '7':
                    $result = $result . "seitsemän";
                    break;
                case '8':
                    $result = $result . "kahdeksan";
                    break;
                case '9':
                    $result = $result . "yhdeksän";
                    break;
                case '10':
                    $result = $result . "kymmenen";
                    break;
                
                default:
                    # code...
                    break;
            }
        
        } else if ( 10 < $number && $number <= 19) {
            $remainer = $number - 10;
            switch ($remainer) {
                case '1':
                    $result = $result . "yksi";
                    break;
                case '2':
                    $result = $result . "kaksi";
                    break;
                case '3':
                    $result = $result . "kolme";
                    break;
                case '4':
                    $result = $result . "neljä";
                    break;
                case '5':
                    $result = $result . "viisi";
                    break;
                case '6':
                    $result = $result . "kuusi";
                    break;
                case '7':
                    $result = $result . "seitsemän";
                    break;
                case '8':
                    $result = $result . "kahdeksan";
                    break;
                case '9':
                    $result = $result . "yhdeksän";
                    break;
                
                default:
                    # code...
                    break;
            }
            $result = $result . "toista";
        } else if (20 <= $number && $number <= 99) {
            $module = floor($number / 10);
            $remainer = $number % 10;
            switch ($module) {
                case '2':
                    $result = $result . "kaksi";
                    break;
                case '3':
                    $result = $result . "kolme";
                    break;
                case '4':
                    $result = $result . "neljä";
                    break;
                case '5':
                    $result = $result . "viisi";
                    break;
                case '6':
                    $result = $result . "kuusi";
                    break;
                case '7':
                    $result = $result . "seitsemän";
                    break;
                case '8':
                    $result = $result . "kahdeksan";
                    break;
                case '9':
                    $result = $result . "yhdeksän";
                    break;
                
                default:
                    # code...
                    break;
            }
            $result = $result . "kymmentä";
            switch ($remainer) {
                case '1':
                    $result = $result . "yksi";
                    break;
                case '2':
                    $result = $result . "kaksi";
                    break;
                case '3':
                    $result = $result . "kolme";
                    break;
                case '4':
                    $result = $result . "neljä";
                    break;
                case '5':
                    $result = $result . "viisi";
                    break;
                case '6':
                    $result = $result . "kuusi";
                    break;
                case '7':
                    $result = $result . "seitsemän";
                    break;
                case '8':
                    $result = $result . "kahdeksan";
                    break;
                case '9':
                    $result = $result . "yhdeksän";
                    break;
                
                default:
                    
                    break;
            }
        } else {
            $result = "sata";
        }
        echo $number . $result;
    ?>
</body>
</html>