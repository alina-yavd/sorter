<?php

declare(strict_types=1);

/*
 *
 * (c) Alina Yavd <ya.alinka23@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AYSorter;

/**
 * Class DescSorter
 * @package AYSorter
 */
class DescSorter implements SorterInterface
{

    /**
     * Main method to sort the array in descending order.
     *
     * @param array $data
     *
     * @return array
     */
    public function sort(array $data): array
    {
        \arsort($data);

        return $data;
    }
}
