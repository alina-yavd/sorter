Sorter
===============

This is a PHP sorting library. Supports ascending and descending sorting, can be easily extended to support custom sorting methods.

Installation
------------

Install library via [composer](http://getcomposer.org/download/):

```
$ composer require alina-yavd/sorter
```

Usage
-----

You have two available strategies: ascending and descending sorting.

To use the Sorter component, decide which strategy you need, initialize an instance of `Sorter` class and use `sort()` method:

```php
use \AYSorter\Sorter;
use \AYSorter\AscSorter;
use \AYSorter\DescSorter;

// Ascending sorting:

$sorter = new Sorter(new AscSorter());

$sorter->sort($array);


// Descending sorting:

$sorter = new Sorter(new DescSorter());

$sorter->sort($array);
```

You can change the strategy without re-initializing `Sorter` class with the `setSorter()` method:

```php
// Change to descending sorting:

$sorter->setSorter(new DescSorter());

$sorter->sort($array);
```

To temporarily disable the sorting, use the provided `NullSorter` strategy:

```php
use \AYSorter\Sorter;
use \AYSorter\NullSorter;

$sorter = new Sorter(new NullSorter());

$sorter->sort($array); // returns the original array
```

Extending Library
-----

You can extend library and add supported strategies by implementing `SorterInterface` interface.

```php
use AYSorter\SorterInterface;

class CustomSorter implements SorterInterface
{
	public function sort(array $data): array {
		// do some logic to sort $data array

		return $data;
	}
}
```
