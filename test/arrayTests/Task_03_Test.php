<?php


namespace PhpTutorial\test\arrayTests;


class Task_03_Test extends ArrayBase
{
    public function testException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->arrayTask->task_03(-1);
    }

    public function testZero()
    {
        $this->assertEmpty($this->arrayTask->task_03(0));
    }

    public function testTask()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = rand(1, 300);
            $result = range(1, $number);
            $result = array_filter($result, function ($value) {
                return $value % 5 === 0 && (strpos((string)$value, '3') !== false);
            });
            $this->assertSame(
                $this->arrayTask->task_03($number),
                array_values($result)
            );
        }
    }

}