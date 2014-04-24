<?php

require 'creds.php';
require '../vendor/autoload.php';

$audio = new OP3Nvoice\Audio($apikey);

$items = $audio->index();

foreach($items as $item) {
    $metadata = $audio->metadata;
    $data = $metadata->load($item['href']);
    print_r($data);

    $metadata->update($item['href'], '{"status": "This is awesome!!"}');
    $data = $metadata->load($item['href']);
    print_r($data);
}