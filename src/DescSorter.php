<?php

declare( strict_types=1 );

namespace AYSorter;

class DescSorter implements SorterInterface {

	public function sort( array $data ): array {

		arsort( $data );

		return $data;

	}

}