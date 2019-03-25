<?php declare(strict_types=1);

namespace Nfq\Akademija\Strict {
    function calculateHomeWorkSum(int...$numbers): int {
        if(!is_array($numbers)) return false;
        return array_sum($numbers);
    }
}
?>