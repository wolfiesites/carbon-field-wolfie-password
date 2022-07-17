<?php

use Carbon_Fields\Carbon_Fields;
use Carbon_Field_Wolfie_Password\Wolfie_Password_Field;

define( 'Carbon_Field_Wolfie_Password\\DIR', __DIR__ );

Carbon_Fields::extend( Wolfie_Password_Field::class, function( $container ) {
	return new Wolfie_Password_Field(
		$container['arguments']['type'],
		$container['arguments']['name'],
		$container['arguments']['label']
	);
} );
