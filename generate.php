<?php

// include wp core load
require_once("../../../wp-load.php");


// include the library
include 'lib/qrcode.php';


// spin up the generator and generate a qr code
$generator = new QRCode( $_REQUEST['data'], array(
	'w' => 200,
	'h' => 200,
	'pt' => 10,
	'pr' => 10,
	'pb' => 10,
	'pl' => 10,
	'sf' => 8,
	'fc' => '#6A0A1B'
) );


/* Output directly to standard output. */
$generator->output_image();


/* Create bitmap image. */
$image = $generator->render_image();
imagepng( $image );
imagedestroy( $image );