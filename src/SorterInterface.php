<?php

declare( strict_types=1 );

namespace AYSorter;

/**
 * Interface SorterInterface
 * @package AYSorter
 */
interface SorterInterface {

	/**
	 * Main method to sort the array.
	 *
	 * @param array $data
	 *
	 * @return array
	 */
	public function sort( array $data ): array;

}