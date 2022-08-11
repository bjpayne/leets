<?php

namespace App\ZigZagConversion;

class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        if ($numRows == 1) {
            return $s;
        }

        echo $s.PHP_EOL;

        for ($i = 0; $i <= strlen($s); $i++) {
            echo $s[($numRows + ($numRows - 2)) * $i];
        }
    }
}
