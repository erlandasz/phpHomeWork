<?php

    require_once __DIR__.("/vendor/autoload.php");


    $numbers = array(5, 10.1, "15");
    echo calculateHomeWorkSum($numbers);
    echo "<hr>";

    use function Nfq\Akademija\Not_Typed\calculateHomeWorkSum;
        $numbers = array(1, "2.5" , 3);
        echo calculateHomeWorkSum($numbers);
    echo "<hr>";

    use Nfq\Akademija\Soft\calculateHomeWorkSum;
        $numbers = array(11, 11.3, 11, 13.25, 1.25);
        echo calculateHomeWorkSum($numbers);
    echo "<hr>"
    
?>
