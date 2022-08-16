<?php

namespace App\ReverseInteger;

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $min = (int) bcpow('-2', '31');
        $min_shifted = intdiv($min, 10);
        $min_last_digit = abs((int) bcmod((string) $min, 10));

        $max = (int) bcsub(bcpow('2', '31'), 1);
        $max_shifted = intdiv($max, 10);
        $max_last_digit = (int) bcmod((string) $max, 10);

        $result = 0;

        while (abs($x) > 0) {
            // shift digit off the end
            $digit = (int) bcmod((string) $x, 10);

            // shift x to the left
            $x = intdiv($x, 10);

            // Check if over max, or is equal to max and last digit is greater than next digit
            if ($result > $max_shifted || ($result == $max_shifted && $digit >= $max_last_digit)) {
                return 0;
            }

            // Check if under min, or is equal to min and last digit is greater than next digit
            if ($result < $min_shifted || ($result == $min_shifted && $digit <= $min_last_digit)) {
                return 0;
            }

            // update result
            $result = ($result * 10) + $digit;
        }

        return $result;
    }
}