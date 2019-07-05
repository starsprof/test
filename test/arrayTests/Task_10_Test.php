<?php


namespace PhpTutorial\test\arrayTests;


class Task_10_Test extends ArrayBase
{
    public function testEmpty()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->arrayTask->task_10([]);
    }

    public function dataProvider()
    {
        $provider = [];

        for ($i = 0; $i < 10; $i++) {
            $data = range(50, rand(55, 200));
            // add duplicates
            for ($k = 0; $k < 50; $k++) {
                $data[] = $data[array_rand($data)];
            }
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
        $values = array_count_values($data);
        ksort($values);
        $max = max($values);
        $value = array_search($max, $values);
        $this->assertSame(
            $this->arrayTask->task_10($data),
            $value
        );
    }
}