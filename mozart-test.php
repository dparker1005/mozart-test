<?php
/*
Plugin Name: Mozart Test
*/
require 'vendor/autoload.php';

if ( ! empty( $_REQUEST['mozart-test'] ) ) {
    // Get namespaced Stripe client.
    $stripe = new Dlparker1005\MozartTest\Vendor\Stripe\StripeClient("test123");

    // Make sure we got the object.
    var_dump( $stripe );

    // Test complete.
    die();
}
