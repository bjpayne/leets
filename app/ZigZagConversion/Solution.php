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

        $strlen = strlen($s);

        $result = '';

        $increment = ($numRows - 1) * 2;

        for ($row = 0; $row < $numRows; $row ++) {
            for ($i = $row; $i < $strlen; $i = $i + $increment) {
                // Not first or last row
                if ($row != 0 && $row != ($numRows - 1)) {
                    $adjacent = $i - ($row * 2);

                    if ($adjacent >= 0 && ! empty($s[$adjacent])) {
                        $result .= $s[$adjacent];
                    }
                }

                if (! empty($s[$i])) {
                    $result .= $s[$i];
                }
            }
        }

        return $result;
    }
}
