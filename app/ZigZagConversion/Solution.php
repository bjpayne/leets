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

        for ($row = 0; $row < $numRows; $row ++) {
            $next = 0;

            for ($i = 0; $i < $strlen; $i++) {
                if ($i == 0) {
                    $result .= $s[$row];
                }

                $next = ($next + (($numRows - 1) * 2));

                $offset = $next + $row;

                // Not first or last row
                if ($row != 0 && $row != ($numRows - 1)) {
                    $adjacent = $offset - ($row * 2);

                    if (! empty($s[$adjacent])) {
                        $result .= $s[$adjacent];
                    }
                }

                if (empty($s[$offset])) {
                    break;
                }

                $result .= $s[$offset];
            }
        }

        return $result;
    }
}
