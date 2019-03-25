<?php

    require_once __DIR__.("/vendor/autoload.php");

        echo "calculateHomeWorkSum:". calculateHomeWorkSum([10, 10, 10]);
    echo "<hr>";

        echo "Nfq\Akademija\Not_Typed\calculateHomeWorkSum is:". Nfq\Akademija\Not_Typed\calculateHomeWorkSum([1, 2.5, 3]);
    echo "<hr>";

        echo "Nfq\Akademija\Soft\calculateHomeWorkSum is:". Nfq\Akademija\Soft\calculateHomeWorkSum(11, 11.3, 11, 13.25, 1.25);
    echo "<hr>";
    
        echo "Nfq\Akademija\Strict\calculateHomeWorkSum is:". Nfq\Akademija\Strict\calculateHomeWorkSum(1, "2.5", 4);
    echo "<hr>"
?>
