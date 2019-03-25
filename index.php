<?php

    require_once __DIR__.("/vendor/autoload.php");


    $numbers = array(5, 10.1, "15");
    echo "calculateHomeWorkSum:". calculateHomeWorkSum($numbers);
    echo "<hr>";

    use function \Nfq\Akademija\Not_Typed\calculateHomeWorkSum;
        $numbers = array(1, "2.5" , 3);
        echo "Nfq\Akademija\Not_Typed\calculateHomeWorkSum is:". calculateHomeWorkSum($numbers);
    echo "<hr>";

    use \Nfq\Akademija\Soft\calculateHomeWorkSum; 
        $numbers = array(11, 11.3, 11, 13.25, 1.25);
        echo "Nfq\Akademija\Soft\calculateHomeWorkSum is:". calculateHomeWorkSum($numbers);
    echo "<hr>";
    
    use \Nfq\Akademija\Strict as Moo;
        $numbers = array(1, 3.3, "2");
        echo "Nfq\Akademija\Strict\calculateHomeWorkSum is:". Moo/calculateHomeWorkSum($numbers);
    echo "<hr>"
?>
