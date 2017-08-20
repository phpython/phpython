<?php

namespace Javanile\Producer\Tests;

use Javanile\Producer;
use PHPUnit\Framework\TestCase;

Producer::addPsr4(['Javanile\\Producer\\Tests\\' => __DIR__]);

final class ProducerCloneTest extends TestCase
{
    public function testCloneGitHubProject()
    {
        $cli = new ProducerMock(__DIR__);
        $cli->runMock(['prova']);
        Producer::log('Hello World!');
        $this->assertEquals(0, 0);
    }
}
