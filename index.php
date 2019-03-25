<?php

    require_once __DIR__.("/vendor/autoload.php");

        echo "calculateHomeWorkSum:". calculateHomeWorkSum(10, "15", 12.5);
    echo "<hr>";

        echo "Nfq\Akademija\Not_Typed\calculateHomeWorkSum is:". Nfq\Akademija\Not_Typed\calculateHomeWorkSum(1, 2.5, 3);
    echo "<hr>";

        echo "Nfq\Akademija\Soft\calculateHomeWorkSum is:". Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, "1");
    echo "<hr>";
    
        echo "Nfq\Akademija\Strict\calculateHomeWorkSum is:". Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, "1");
    echo "<hr>"

?>