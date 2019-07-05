<?php


namespace PhpTutorial\test\arrayTests;


class Task_08_Test extends ArrayBase
{
    public function testEmpty()
    {
        $this->assertEmpty($this->arrayTask->task_08([]));
    }

    public function dataProvider()
    {
        $provider = [];

        for ($i = 0; $i < 5; $i++) {
            $data = range(1, rand(3, 100));
            $stringCount = rand(1, 10);
            for ($k = 0; $k < $stringCount; $k++) {
                $data[] = $this->generateRandomString(rand(1,10));
            }
            // add duplicates
            for ($k = 0; $k < 5; $k++) {
                $data[] = $data[array_rand($data)];
            }
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
        $actual = array_unique($data);
        $this->assertSame(
            $this->arrayTask->task_08($data),
            $actual
        );
    }
}