<?php

namespace App\ValidSudoku;

class Solution
{
    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        $board = json_decode($board);

        // rows
        for ($i = 0; $i < 9; $i++) {
            $row_values = [];
            $column_values = [];

            // columns
            for ($j = 0; $j < 9; $j++) {
                $row_key = $board[$i][$j];
                $column_key = $board[$j][$i];

                if ($row_key !== '.') {
                    if (! empty($row_values[$row_key])) {
                        return false;
                    }

                    $row_values[$row_key] = true;
                }

                if ($column_key !== '.') {
                    if (! empty($column_values[$column_key])) {
                        return false;
                    }

                    $column_values[$column_key] = true;
                }
            }
        }

        return true;
    }
}

/**
 * [
 *  [5, 3, .]
 *  [6, ., .]
 *  [., 9, 8]
 * ]
 */