<?php

class Solution
{

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b)
    {

        $remember = "";
        $result = "";

        while ($a != "" && $b != "") {
            $endA = substr($a, -1);
            $endB = substr($b, -1);

            if ($endA === "1" && $endB === "1") {
                if ($remember === "1") {
                    $result = "1" . $result;
                    $remember = "1";
                } else {
                    $result = "0" . $result;
                    $remember = "1";
                }
            } else {
                if (($endA === "1" || $endB === "1") && $remember === "1") {
                    $result = "0" . $result;
                    $remember = "1";
                } elseif ($remember === "1") {
                    $result = "1" . $result;
                    $remember = "";
                } else {
                    $sum = $endA + $endB;
                    $result = $sum . $result;
                }
            }

            var_dump($result);

            $a = substr($a, 0, -1);
            $b = substr($b, 0, -1);

            if ($a == "" && $b == "") {
                $result = $remember . $result;

                return $result;
            }

            if ($a == "" && $b != "" && $remember === "1") {
                $a = 1;
                $remember = "";
            }

            if ($a == "" && $b != "" && $remember == "") {
                $result = $b . $result;
                return $result;
            }

            if ($a != "" && $b == "" && $remember === "1") {
                $b = 1;
                $remember = "";
            }
            if ($a != "" && $b == "" && $remember == "") {
                $result = $a . $result;
                return $result;
            }
        }
    }
}