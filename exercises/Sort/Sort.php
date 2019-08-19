<?php

declare(strict_types=1);

namespace Exercises\Sort;

/**
 * Implement sorting algorithms.
 *
 * @method static array bubble(array $input) Bubble Sort
 * @method static array selection(array $input) Selection Sort
 * @method static array insertion(array $input) Insertion Sort
 * @method static array merge(array $input) Merge Sort
 * @method static array quick(array $input) Quick Sort
 * @method static array radix(array $input) Radix Sort
 */
final class Sort
{
	    public static function bubble(array $input): array
    {
        $noSwap = true;
        $length = count($input) - 1;
        while ($noSwap) {
            $noSwap = false;
            for ($i = 0; $i < $length; ++$i) {
                if ($input[$i] > $input[$i + 1]) {
                    self::swap($input[$i], $input[$i + 1]);
                    $noSwap = true;
                }
            }
        }
        return $input;
    }
    public static function selection(array $input): array
    {
        for ($i = 0, $min = $i, $length = count($input); $i < $length; $min = ++$i) {
            for ($j = $i + 1; $j < $length; ++$j) {
                if ($input[$j] < $input[$min]) {
                    $min = $j;
                }
            }
            if ($i !== $min) {
                self::swap($input[$i], $input[$min]);
            }
        }
        return $input;
    }
    public static function insertion(array $input): array
    {
        foreach ($input as $i => $value) {
            for ($j = $i; $j > 0 && $input[$j - 1] > $value; --$j) {
                $input[$j] = $input[$j - 1];
            }
            $input[$j] = $value;
        }
        return $input;
    }
}
