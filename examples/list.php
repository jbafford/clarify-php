<?php

// Don't forget to rename creds-dist.php to creds.php and insert your API key
require __DIR__.'/creds.php';
require __DIR__.'/../vendor/autoload.php';

$bundle = new \Clarify\Bundle($apikey);

$items = $bundle->index();

foreach ($items as $item) {
    $bundle = $bundle->load($item['href']);

    echo $bundle['_links']['self']['href'] . "\n";
    echo $bundle['name'] . "\n";
}
