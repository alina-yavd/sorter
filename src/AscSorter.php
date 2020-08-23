<?php

declare(strict_types=1);

namespace AYSorter;

/**
 * Class AscSorter
 * @package AYSorter
 */
class AscSorter implements SorterInterface
{

    /**
     * Main method to sort the array in ascending order.
     *
     * @param array $data
     *
     * @return array
     */
    public function sort(array $data): array
    {
        \asort($data);

        return $data;
    }
}
