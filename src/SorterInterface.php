<?php

declare( strict_types=1 );

namespace AYSorter;

interface SorterInterface {

	public function sort( array $data ): array;

}