<?php
/**
 *Given two sorted arrays nums1 and nums2 of size m and n respectively, return
 * the median of the two sorted arrays.
 *
 * The overall run time complexity should be O(log (m+n)).
 */

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2)
    {
        $nums = array_merge($nums1, $nums2);
        sort($nums, SORT_NUMERIC);
        $countNums = count($nums);

        if ($countNums%2 == 0) {
            $median = ($nums[$countNums/2] + $nums[$countNums/2-1])/2;
            return $median;
        } else {
            $median = $nums[(($countNums-1)/2)];
            return $median;
        }
    }
}