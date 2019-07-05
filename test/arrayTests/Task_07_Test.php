<?php


namespace PhpTutorial\test\arrayTests;


class Task_07_Test extends ArrayBase
{

    public function testEmpty()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->arrayTask->task_07([],0,0);
    }

    public function testLength()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->arrayTask->task_07(range(1,10), 0, rand(11,1000));
    }
    public function testMinusLength()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->arrayTask->task_07(range(1,10),0, -2);
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
     * @param $data
     */
    public function testTask($data)
    {
        $start = rand(0,count($data)-1);
        $length = count($data) - $start -1;
        $length = rand(0, $length);
        $this->assertSame(
            $this->arrayTask->task_07($data, $start, $length),
            array_slice($data, $start, $length)
        );
    }

}