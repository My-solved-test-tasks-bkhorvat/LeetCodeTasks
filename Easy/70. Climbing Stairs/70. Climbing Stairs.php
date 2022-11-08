<?php

class Solution
{

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {
        if ($n === 1) {
            return 1;
        }

        if ($n === 2) {
            return 2;
        }

        $beforPreviosAllWay = 1;
        $previousAllWays = 2;

        for ($i = 3; $i <= $n; $i++) {
            $allWays = $previousAllWays + $beforPreviosAllWay;
            $beforPreviosAllWay = $previousAllWays;
            $previousAllWays = $allWays;
        }

        return $allWays;
    }
}