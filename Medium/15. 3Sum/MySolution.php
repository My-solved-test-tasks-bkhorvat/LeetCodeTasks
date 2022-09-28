<?php
//Time Limit Exceeded
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums)
    {
        $result = [];
        sort($nums, SORT_NUMERIC);

        for ($firstNumberId = 0; $firstNumberId < count($nums); $firstNumberId++) {
            for ($secondNumberId = $firstNumberId + 1; $secondNumberId < count($nums); $secondNumberId++) {

                $sumFirstSecond = -1 * ($nums[$firstNumberId] + $nums[$secondNumberId]);


                $withoutCheked = array_slice($nums, $secondNumberId + 1, null, true);

                $thirdNumberId = array_search($sumFirstSecond, $withoutCheked);

                if ($thirdNumberId) {
                    $sortResult = [$nums[$firstNumberId], $nums[$secondNumberId], $nums[$thirdNumberId]];
                    sort($sortResult, SORT_NUMERIC);
                    if (array_search($sortResult, $result) === false) {
                        $result[] = $sortResult;
                    }
                }
            }
        }

        return $result;
    }
}