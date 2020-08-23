#!/usr/bin/env php
<?php

declare( strict_types=1 );

use \AYSorter\{Sorter, AscSorter, DescSorter, NullSorter};

require_once __DIR__ . '/../vendor/autoload.php';

$exampleStrings = array( 'Jack', 'of', 'All', 'Trades', 'Master', 'of', 'None' );
$exampleNumbers = array( 555, - 1, 0, 20, - 20, 1990 );


$sorter = new Sorter( new AscSorter() );

$result = $sorter->sort( $exampleStrings );
echo sprintf( "Ascending mode: %s\n", implode( ',', $result ) );

$result = $sorter->sort( $exampleNumbers );
echo sprintf( "Ascending mode: %s\n", implode( ',', $result ) );

$sorter->setSorter( new DescSorter() );

$result = $sorter->sort( $exampleStrings );
echo sprintf( "\nDescending mode: %s\n", implode( ',', $result ) );

$result = $sorter->sort( $exampleNumbers );
echo sprintf( "Descending mode: %s\n", implode( ',', $result ) );

$sorter->setSorter( new NullSorter() );

$result = $sorter->sort( $exampleStrings );
echo sprintf( "\nNull object mode: %s\n", implode( ',', $result ) );