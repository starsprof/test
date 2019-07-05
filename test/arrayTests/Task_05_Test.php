<?php


namespace PhpTutorial\test\arrayTests;


class Task_05_Test extends ArrayBase
{
    public function dataProvider()
    {
        $provider = [];
        for ($i = 0; $i < 10; $i++) {
            $length = rand(1,100);
            $data = [];
            for($k = 0; $k < $length; $k++){
                $data[(string)$k] = $this->generateRandomString(rand(1,10));
            }
            shuffle($data);
            $provider[] = array($data);
        }
        return $provider;
    }

    public function testEmpty()
    {
        $this->assertEmpty($this->arrayTask->task_05([]));
    }

    /**
     * @dataProvider dataProvider
     * @param array $data
     */
    public function testTask(array $data)
    {
        $actual = $data;
        ksort($actual);
        $this->assertSame(
            $this->arrayTask->task_05($data),
            $actual
        );
    }

}