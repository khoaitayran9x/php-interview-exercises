<?php

declare(strict_types=1);

namespace Exercises\Fibonacci;

/**
 * The fibonacci series is a series of numbers where
 * each consecutive number is the sum of the previous two.
 * For example [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ∞]
 *
 * @method static int get(int $index)
 * @example Fibonacci::get(7) === 13
 */
final class FibonacciComplete
{
    private static $cache = [];

    public static function get1(int $index): int
    {
        $result = [];

        for ($i = 0; $i <= $index; ++$i) {
            if ($i < 2) {
                $result[] = $i;
            } else {
                $result[] = $result[$i - 1] + $result[$i - 2];
            }
        }

        return $result[$index];
    }

    public static function get2(int $index): int
    {
        if ($index < 2) {
            return $index;
        }

        return self::get2($index - 1) + self::get2($index - 2);
    }

    public static function get3(int $index): int
    {
        if (array_key_exists($index, self::$cache)) {
            return self::$cache[$index];
        }

        if ($index < 2) {
            self::$cache[$index] = $index;

            return $index;
        }

        $result = self::get3($index - 1) + self::get3($index - 2);
        self::$cache[$index] = $result;

        return $result;
    }
}
