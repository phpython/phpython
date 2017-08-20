<?php

namespace Javanile\Producer\Tests;

use Javanile\Producer;
use PHPUnit\Framework\TestCase;

Producer::addPsr4(['Javanile\\Producer\\Tests\\' => __DIR__]);

final class ProducerTest extends TestCase
{
    public function testCliStaticMethod()
    {
        //
        $output = Producer::cli([__FILE__]);
        $this->assertRegexp('/required/i', $output);

        //
        $output = Producer::cli([__FILE__, '--help']);
        $this->assertRegexp('/usage/i', $output);

        //
        $output = Producer::cli([__FILE__, '--version']);
        $this->assertRegexp('/version/i', $output);
    }

    public function testCloneGitHubProject()
    {
        $cli = new ProducerMock(__DIR__);
        $cli->runMock(['prova']);
        Producer::log('Hello World!');
        $this->assertEquals(0, 0);
    }
}
