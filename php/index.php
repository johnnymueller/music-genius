<?php

require_once('autoload.php');

$geniusphp = new \Genius\Genius('041kLftW7BAJGp51l8mwApM122FS1xWDM14C14kAs46K86J1yLXzKMz8YSIKbTJv');

// let's search for the most popular song on Genius for Kendrick Lamar
$search = $geniusphp->search->get('Kendrick Lamar')->response->hits[0]->result->id;

// and get everything about that song
$song = $geniusphp->songs->get( $search );

print_r($song);
