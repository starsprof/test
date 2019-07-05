<?php


namespace PhpTutorial\test\arrayTests;


class Task_06_Test extends ArrayBase
{

    public function testEmpty()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->assertEmpty($this->arrayTask->task_06([]));
    }

    public function dataProvider()
    {
        $provider = [];
        for($i = 0; $i < 10; $i ++){
            $start = rand(1,100);
            $data = range($start, 98);
            shuffle($data);
            $provider[] = array($data);
        }
        return $provider;
    }

    /**
     * @dataProvider dataProvider
     * @param array $data
     */
    public function testTask(array $data)
    {
        $actual = $data;
        $min = min($data);
        $max = max($data);
        $minIndex = array_search($min, $actual);
        $maxIndex = array_search($max, $actual);
        $actual[$minIndex] = $max;
        $actual[$maxIndex] = $min;
        $this->assertSame(
            $this->arrayTask->task_06($data),
            $actual
        );
    }

}