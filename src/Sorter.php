<?php

declare( strict_types=1 );

namespace AYSorter;

class Sorter {

	private SorterInterface $sorter;

	public function __construct( SorterInterface $sorter ) {
		$this->sorter = $sorter;
	}

	public function setSorter( SorterInterface $sorter ) {
		$this->sorter = $sorter;
	}

	public function sort( array $data ): array {
		return $this->sorter->sort( $data );
	}

}