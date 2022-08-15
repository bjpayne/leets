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

        $result = '';

        $row = $column = 1;

        $rows = [];

        $direction = 'down';

        for ($i = 0; $i < strlen($s); $i++) {
            if (empty($rows[$row])) {
                $rows[$row] = [];
            }

            $rows[$row][$column] = $s[$i];

            if ($row == $numRows) {
                $direction = 'up';
            }

            if ($row == 1 && $direction == 'up') {
                $direction = 'down';

                $row = 1;
            }

            if ($direction == 'down') {
                $row = $row + 1;
            }

            if ($direction == 'up') {
                $row = $row - 1;

                $column = $column + 1;
            }
        }

        foreach ($rows as $row) {
            $result .= implode($row);
        }

        return $result;
    }
}
