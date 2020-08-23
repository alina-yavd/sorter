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
 * Class Sorter
 * @package AYSorter
 */
class Sorter
{

    /**
     * @var SorterInterface
     */
    private SorterInterface $sorter;

    /**
     * Constructor.
     *
     * @param SorterInterface $sorter
     */
    public function __construct(SorterInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    /**
     * Setter for SorterInterface.
     *
     * @param SorterInterface $sorter
     */
    public function setSorter(SorterInterface $sorter): void
    {
        $this->sorter = $sorter;
    }

    /**
     * Main method to sort the array.
     *
     * @param array $data
     *
     * @return array
     */
    public function sort(array $data): array
    {
        return $this->sorter->sort($data);
    }
}
