<?php

// include wp core load
require_once("../../../wp-load.php");


// include the library
include 'lib/qrcode.php';


// spin up the generator and generate a qr code
$generator = new QRCode( $_REQUEST['data'], "sf=4" );


/* Output directly to standard output. */
$generator->output_image();


/* Create bitmap image. */
$image = $generator->render_image();
imagepng( $image );
imagedestroy( $image );