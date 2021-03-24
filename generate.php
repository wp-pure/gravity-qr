<?php

// include wp core load
require_once("../../../wp-load.php");


// include the library
include 'lib/qrcode.php';

// spin up the generator and generate a qr code
$generator = new QRCode( get_bloginfo( 'home' ) . '/wp-admin/admin.php?page=gf_entries&view=entry&id=' . $_REQUEST['entry_id'] . '&lid=1&order=ASC&filter&paged=1&pos=0&field_id&operator', $options );


/* Output directly to standard output. */
$generator->output_image();


/* Create bitmap image. */
$image = $generator->render_image();
imagepng( $image );
imagedestroy( $image );