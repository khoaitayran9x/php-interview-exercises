<?php

declare(strict_types=1);

namespace Exercises\Search;

/**
 * Implement Linear and Binary search that returns $n if found otherwise null.
 * Implement Naive search that returns int repetitions of $n inside of a $string.
 *
 * @method static int|null linear(int[] $input, int $n)
 * @method static int|null binary(int[] $input, int $n)
 * @method static int naive(string $input, string $n)
 */
final class Search
{
	public static function linear(array $input, int $n): ?int
    {
        if (count($input) === 0) {
            return null;
        }

        foreach ($input as $i => $v) {
            if ($v === $n) {
                return $i;
            }
        }

        return null;
    }

    public static function binary(array $input, int $n): ?int
    {
        if (count($input) === 0) {
            return null;
        }

        $start = 0;
        $end = count($input) - 1;
        $middle = intdiv($start + $end, 2);

        while ($input[$middle] !== $n && $start <= $end) {
            if ($n < $input[$middle]) {
                $end = $middle - 1;
            } else {
                $start = $middle + 1;
            }
            $middle = intdiv($start + $end, 2);
        }

        return $input[$middle] === $n ? $middle : null;
    }
}
