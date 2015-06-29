<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 28/06/15
 * Time: 20:22
 */

namespace AppBundle\Tests\Library;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LibBase extends WebTestCase{

    public static $client;

    public function setUp(){
        self::$client = static::createClient();
    }

    public static function assertResponse($message, $expectedCode = 200){
        self::assertEquals($expectedCode, self::$client->getResponse()->getStatusCode(),$message);
    }

    public static function getResponseData(){
        return json_decode(self::$client->getResponse()->getContent(), true);
    }
}