<?php

/**
 * Longest Substring Without Repeating Characters
 *
 * Given a string s, find the length of the longest substring without repeating characters.
 */

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    public function lengthOfLongestSubstring($s)
    {
        if($s === ""){
            return "0";
        } else {
            return longestSubstring($s);
        }
    }
}

function longestSubstring($s)
{

    for ($i1 = 0; $i1 < strlen($s); $i1++) {
        $checkStr = substr($s, $i1);

        if (strlen($checkStr) <= $longestSubstring) {
            break;
        }
        $longestSubstring = checkLongestSubstring($checkStr, $longestSubstring);
    }
    return $longestSubstring;
}

function checkLongestSubstring($s, $longestSubstring)
{
    for ($i = 1; $i < strlen($s)+1; $i++) {

        if ((strlen($s)-$i) !== 0) {
            $checkSubString = substr($s, 0, -(strlen($s)-$i));

            if ($longestSubstring >= strlen($checkSubString)) {
                continue;
            }
            if (checkUniqueSymbols($checkSubString)){

                if (strlen(count_chars($checkSubString, 3)) > $longestSubstring) {
                    $longestSubstring = strlen(count_chars($checkSubString, 3));
                }
            } else {
                break;
            }
        } else {
            $checkString = substr($s, 0);

            if (checkUniqueSymbols($checkString)) {

                if (strlen(count_chars($checkString, 3)) > $longestSubstring) {
                    $longestSubstring = strlen(count_chars($checkString, 3));
                }
            } else {
                break;
            }
        }
    }
    return $longestSubstring;
}

function checkUniqueSymbols($str)
{
    $count = count_chars($str, 1);
    foreach ($count as $val) {
        if ($val == 1) {
            $result = true;
        } elseif ($str[0] == $str[1] && strlen($str) == 2) {
            $result = true;
        } else {
            $result = false;
            break;
        }
    }
    return $result;
}