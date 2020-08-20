<?php

namespace AYSorter;

class Sorter {

	private SorterInterface $sorter;

	public function __construct( SorterInterface $sorter ) {
		$this->sorter = $sorter;
	}

	public function setSorter( SorterInterface $sorter ) {
		$this->sorter = $sorter;
	}

	public function sort( $data ): array {
		return $this->sorter->sort( $data );
	}

}