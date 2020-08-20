<?php

namespace AYSorter;

class AscSorter implements SorterInterface {

	public function sort( array $data ): array {

		asort( $data );

		return $data;

	}

}