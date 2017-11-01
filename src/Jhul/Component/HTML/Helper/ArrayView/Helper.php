<?php namespace Jhul\Component\HTML\Helper\ArrayView;

/* @Author : Manish Dhruw
+=======================================================================================================================
| @Created : 2017NOV1
+---------------------------------------------------------------------------------------------------------------------*/

class Helper
{
	public function __construct()
	{
		$this->_style = $this->loadCss('horizontal').$this->loadCss('icons').$this->loadCss('vertical');
	}

	public function loadCss( $name )
	{
		return file_get_contents( __DIR__.'/style/'.$name.'.css' ) ;
	}


	// public function htmlEncode( $string )
	// {
	// 	return htmlspecialchars( $string, ENT_QUOTES, 'utf-8' ) ;
	// }

	// public function isEven( $depth )
	// {
	// 	return ($depth % 2) === 0 ;
	// }

	public function toHTML( $array )
	{

		$array = new _Array( $array, $this );

		//$this->_array = $this->dummyArray();

		$html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">' ;

		$html .= '<style>'.$this->_style.'</style>';

		return $html.$array->toString() ;
	}


	// //@param $pair html( key.value )
	// public function pair( $pair, $depth )
	// {
	// 	return '<div class="'.$this->styleClass('pair', $depth).'">'.$pair.'</div>' ;
	// }
	//
	// public function key( $key, $depth )
	// {
	// 	return '<div class="'.$this->styleClass('key', $depth).'">'.$key.'</div>' ;
	// }
	//
	// public function value( $value, $depth )
	// {
	// 	return '<div class="'.$this->styleClass('value', $depth).'">'.$value.'</div>' ;
	// }
	//
	// public function styleClass( $class, $depth )
	// {
	// 	return $this->isEven( $depth ) ? $class.'_h' : $class.'_v';
	// }

	public function dummyArray()
	{
		return
		[
			'keya' => 'valb',
			'keyf' => 'valg',
			'keyc' =>
			[
				'keyd' => 'val',
				'keya' => 'val',
				'keyn' => 'val;l',
			],

			'keycas' =>
			[
				'keyc' =>
				[
					'keyd' => 'valsa',
					'keya' => 'val',
					'keyn' => 'val',
				],
				'keya' => 'val',
				'keyn' => 'val',
			],
			'keyh' => 'vali',
		];

	}

	public function showDummy()
	{
		return $this->toHTML( $this->dummyArray() ) ;
	}

	// public function arrow()
	// {
	// 	if( $this->isEven() )
	// 	{
	// 		return '<div class="arrow_v"><i class="icon-down"></i></div>' ;
	// 	}
	//
	// 	return '<div class="arrow_h"><i class="icon-right"></i></div>' ;
	// }
}
