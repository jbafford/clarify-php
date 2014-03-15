<?php

require 'creds.php';
require '../vendor/autoload.php';

$audio = new Op3nvoice\Audio($apikey);

$success = $audio->create('http://example.com/');

if ($success) {
    $newURI = $audio->detail['_links']['self']['href'];
    echo $newURI . "\n";

    $item = $audio->load($newURI);
    print_r($item);
} else {
    echo $audio->detail['message'] . "\n";
}