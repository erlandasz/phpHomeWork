<?php 

namespace {
    function calculateHomeWorkSum($numbers) {
        if (!is_array($numbers)) return false;
        return array_sum($numbers);
    }
}
namespace Nfq\Akademija\Not_Typed {
    function calculateHomeWorkSum($numbers): int {
    if(!is_array($numbers)) return false;
    return array_sum($numbers);
    }
}
namespace Nfq\Akademija\Soft {
    function calculateHomeWorkSum(int...$numbers): int {
        if(!is_array($numbers)) return false;
        return array_sum($numbers);
    }
}
?>