<?php

namespace Javanile\Producer\Tests;

use Javanile\Producer;

class ProducerMock extends Producer
{
    public function __construct($cwd)
    {
        parent::__construct($cwd);
    }

    public function runMock($args)
    {
        $this->run($args);
    }
}


