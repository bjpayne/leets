<?php

namespace App\ValidSudoku;

class Solution
{
    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
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

        //squares
        $square_values = [];

        for ($i = 0; $i < 9; $i++) {
            $starting_row = 3 * intdiv($i,3);

            $starting_column = 3 * ($i % 3);

            for ($j = $starting_row; $j < ($starting_row + 3); $j++) {
                for ($k = $starting_column; $k < ($starting_column + 3); $k++) {
                    $square_key = $board[$j][$k];

                    if (! empty($square_values[$square_key])) {
                        return false;
                    }

                    if ($square_key !== '.') {
                        $square_values[$square_key] = true;
                    }
                }
            }

            $square_values = [];
        }

        return true;
    }
}
