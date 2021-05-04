<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jackpot</title>
</head>
<body>
    <?php 
        $counter = 0;
        $zeroCounter = 0;

        for($i=0; $i <5; $i++) {
           $randomNumber = rand(0,1);
           echo $randomNumber;
           if($randomNumber == 1) {
               $counter ++;
           } else {
                $zeroCounter ++;
           }
        }
        echo "<br>";
        if ( $counter == 5) {
            echo "Congrats, you won Jakpot! your winning probability was " . 1 / 2**5;
        } else if ( $zeroCounter == 5){
            echo "Congrats, you had  five zeros and that's hard as well!symfony";
        } else {
            echo "Sorry no win";
        }
    ?>
</body>
</html>