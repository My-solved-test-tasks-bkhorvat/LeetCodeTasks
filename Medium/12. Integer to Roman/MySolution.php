<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {

        $arrRomanNumeric = [
            "I" => 1,
            "II" => 2,
            "III" => 3,
            "IV" => 4,
            "V" => 5,
            "VI" => 6,
            "VII" => 7,
            "VIII" => 8,
            "IX" => 9,
            "X" => 10,
            "XX" => 20,
            "XXX" => 30,
            "XL" => 40,
            "L" => 50,
            "LX" => 60,
            "LXX" => 70,
            "LXXX" => 80,
            "XC" => 90,
            "C" => 100,
            "CC"=> 200,
            "CCC" => 300,
            "CD" => 400,
            "D" => 500,
            "DC" => 600,
            "DCC" => 700,
            "DCCC" => 800,
            "CM" => 900,
            "M" => 1000,
            "MM" => 2000,
            "MMM" => 3000,
            "MV" => 4000,
        ];
        $arrRomanNumeric = array_flip($arrRomanNumeric);
        $num = strval($num);
        $len = strlen($num);

        for ($i = 0; $i < strlen($num); $i++) {
            if ($len == 4) {
                $arr[$i] = $num[$i]*1000;
            }
            if ($len == 3) {
                $arr[$i] = $num[$i]*100;
            }
            if ($len == 2) {
                $arr[$i] = $num[$i]*10;
            }
            if ($len == 1) {
                $arr[$i] = $num[$i];
            }

            $len--;
        }

        foreach ($arr as $value) {
            $result .= $arrRomanNumeric[$value];
        }
        return $result;
    }
}