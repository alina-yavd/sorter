<?php

namespace AYSorter;

class NullSorter implements SorterInterface {

	public function sort( array $data ): array {

		return $data;

	}

}