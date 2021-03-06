<?php
use AlAdhanApi\Helper\GoogleMapsApi;

class GoogleMapsApiTest extends \PHPUnit\Framework\TestCase
{
    private $client;

    public function setup()
    {
        $this->client = new GoogleMapsApi();
    }

    public function testGeoLocationAndTimezone()
    {
        $res = $this->client->getGeoCodeLocationAndTimezone('Sultanahmet Masjid, Istanbul, Turkey');
        $this->assertEquals('İstanbul', $res->state);
        $this->assertEquals('Turkey', $res->country);
        $this->assertEquals('Europe/Istanbul', $res->timezone);
    }

}
