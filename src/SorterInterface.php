<?php

declare(strict_types=1);

namespace AYSorter;

/**
 * Describes a sorter instance.
 * @package AYSorter
 */
interface SorterInterface
{

    /**
     * Describes sort method.
     *
     * @param array $data
     *
     * @return array
     */
    public function sort(array $data): array;
}
