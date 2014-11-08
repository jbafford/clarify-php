<?php
include '../vendor/autoload.php';

use Guzzle\Http;

class MetadataTest extends PHPUnit_Framework_TestCase
{
    protected $bundle = null;
    protected $media  = 'http://media.clarify.io/audio/samples/harvard-sentences-1.wav';

    public function setUp()
    {
        global $apikey;

        $this->bundle = new \Clarify\Bundle($apikey);

        parent::setUp();
    }

    public function testUpdate()
    {
        $this->markTestIncomplete();
    }
}