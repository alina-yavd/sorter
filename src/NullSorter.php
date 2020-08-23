<?php

declare( strict_types=1 );

namespace AYSorter;

class NullSorter implements SorterInterface {

	public function sort( array $data ): array {

		return $data;

	}

}