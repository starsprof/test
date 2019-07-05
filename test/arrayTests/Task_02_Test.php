<?php

namespace PhpTutorial\test\arrayTests;

use PHPUnit\Framework\TestCase;

class Task_02_Test extends ArrayBase
{
    public function testZero()
    {
        $this->assertEmpty($this->arrayTask->task_02(0));
    }

    public function testMinus()
    {
        $n = rand(-100, -1);
        $this->expectException(\InvalidArgumentException::class);
        $this->arrayTask->task_02($n);
    }

    public function testTask()
    {
        for ($i = 0; $i < 10; $i++) {

            $n = rand(1, 100);
            $arr = range(0, $n - 1);
            $this->assertSame(
                $this->arrayTask->task_02($n),
                array_map(function ($key) {
                    return $key * $key;
                }, $arr)
            );
        }
    }
}
