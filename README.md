A PHP library to visualize PHP Array


### Requirement
 - PHP version >= 5.6
 - browser with css flex support


##Installation
 - Clone or download this repository
 - Include 'src/autoloader.php' in your project


### Usage
```php

require( 'src/autoloader.php' );

$helper = new \Jhul\Component\HTML\Helper\ArrayView\Helper();

$array =
[
	'key1' => 'val1',
	'key2' => 'val2',
	'key3' =>
	[
		'key3-1' => 'val3-1',
		'key3-2' => 'val3-2',
		'key3-3' => 'val3-3',
	],

	'key4' =>
	[
		'key4-1' =>
		[
			'key4-1-1' => 'val4-1-1',
			'key4-1-2' => 'val4-1-2',
			'key4-1-3' => 'val4-1-3',
		],

		'key4-2' => 'val4-2-1',
		'key4-3' => 'val4-2-1',
	],

	'key5' => 'val5',
];

echo $helper->toHTML( $array );
```

### Screenshot

![html](screen.png?raw=true "ArrayView")
