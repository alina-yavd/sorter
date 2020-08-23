<?php

declare( strict_types=1 );

namespace AYSorter;

/**
 * Class Sorter
 * @package AYSorter
 */
class Sorter {

	/**
	 * @var SorterInterface
	 */
	private SorterInterface $sorter;

	/**
	 * Constructor.
	 *
	 * @param SorterInterface $sorter
	 */
	public function __construct( SorterInterface $sorter ) {
		$this->sorter = $sorter;
	}

	/**
	 * Setter for SorterInterface.
	 *
	 * @param SorterInterface $sorter
	 */
	public function setSorter( SorterInterface $sorter ) {
		$this->sorter = $sorter;
	}

	/**
	 * Main method to sort the array.
	 *
	 * @param array $data
	 *
	 * @return array
	 */
	public function sort( array $data ): array {
		return $this->sorter->sort( $data );
	}

}