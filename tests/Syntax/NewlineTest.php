<?php

namespace Phpython\Tests\Syntax;

use Javanile\Producer;
use PHPUnit\Framework\TestCase;
use Phpython\Interpreter;

Producer::addPsr4(['Phpython\\Tests\\' => __DIR__]);

final class NewlineTest extends TestCase
{
    public function testOnlyOneNewline()
    {
        ## require_once '../../python/python.build.php';
        ## require_once '../../phpython.php';
        $interpreter = new Interpreter();

        ## phpython::import('test2.py');
        $output = $interpreter->run(__DIR__.'/NewlineTest1.py');
    }
}
