<?php

// include wp core load
require_once("../../../wp-load.php");


// include the library
include 'lib/qrcode.php';


// check to see if we're being passed gravity forms entry info
if ( isset( $_REQUEST['entry'] ) ) {

	// split the parameter
	$entry_part = explode( '::', $_REQUEST['entry'] );

	// build the data url.
	$qr_data = get_bloginfo( 'home' ) . '/wp-admin/admin.php?page=gf_entries&view=entry&id=' . $entry_part[0] . '&lid=' . $entry_part[1] . '&order=ASC&filter&paged=1&pos=0&field_id&operator';

} else {

	// otherwise, directly put the data parameter into the qr data variable
	$qr_data = $_REQUEST['data'];
	
}


// spin up the generator and generate a qr code
$generator = new QRCode( $qr_data, array(
	's' => 'qr-h',
	'fc' => '#6A0A1B'
) );


/* Output directly to standard output. */
$generator->output_image();


/* Create bitmap image. */
$image = $generator->render_image();
imagepng( $image );
imagedestroy( $image );