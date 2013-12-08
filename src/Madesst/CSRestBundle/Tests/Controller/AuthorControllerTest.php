<?php

namespace Madesst\CSRestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthorControllerTest extends WebTestCase
{
    public function testAll()
    {
        $client = static::createClient(['environment' => 'test']);

        $client->request('GET', '/api/authors', [], [], ['HTTP_ACCEPT' => 'application/json']);

        $content = $client->getResponse()->getContent();

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJson($content);
    }

    public function testGet()
    {
        $client = static::createClient(['environment' => 'test']);

        $client->request('GET', '/api/author/1', [], [], ['HTTP_ACCEPT' => 'application/json']);

        $content = $client->getResponse()->getContent();

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJson($content);
    }
}
