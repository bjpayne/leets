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
                $result .= $s[$i];

                // On the diagonals move to the next character, than back twice the number of rows
                $diagonal = ($i + $increment) - (2 * $row);

                if ($row > 0 && $row < ($numRows - 1) && $diagonal < $strlen) {
                    $result .= $s[$diagonal];
                }
            }
        }

        return $result;
    }
}
