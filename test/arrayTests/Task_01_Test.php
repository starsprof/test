<?php

namespace PhpTutorial\test\arrayTests;

use PHPUnit\Framework\TestCase;

class Task_01_Test extends ArrayBase
{


    public function testException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $b = rand(0, 1000);
        $this->arrayTask->task_01(rand($b + 1, 1001), $b);
    }

    public function testSum()
    {
        for ($i = 1; $i < 10; $i++) {
            $a = rand(0, 998);
            $b = rand($a, 1001);
            $sum = array_sum(range($a, $b));
            $this->assertSame($this->arrayTask->task_01($a, $b), $sum);
        }
    }

    public function testEquals()
    {
        $this->expectException(\InvalidArgumentException::class);
        $n = rand();
        $this->arrayTask->task_01($n, $n);
    }

}
