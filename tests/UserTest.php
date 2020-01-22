<?php

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;


/**
 * Class UserTest
 */
class UserTest extends ApiTestCase
{
    public function testGetUsers()
    {
        $response = self::createClient()->request('GET', '/api/users');
        $this->assertResponseIsSuccessful();
        $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8', json_encode($response->getHeaders()));
    }
}
