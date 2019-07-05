<?php


namespace PhpTutorial\test\arrayTests;


use InvalidArgumentException;

class Task_09_Test extends ArrayBase
{
    public function testEmpty()
    {
        $this->assertSame(
            $this->arrayTask->task_09([]),
            0
        );
    }

    public function testException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $length = rand(10, 100);
        $data = [];
        for ($i = 0; $i < $length; $i++) {
            $data[] = $this->generateRandomString(rand(1, 10));
        }
        $this->arrayTask->task_09($data);
    }

    public function dataProvider()
    {
        $provider = [];

        for ($i = 0; $i < 15; $i++) {
            $data = range(1, rand(3, 1000));
            $stringCount = rand(1, 10);
            for ($k = 0; $k < $stringCount; $k++) {
                $data[] = $this->generateRandomString(rand(1,10));
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
        $actual = array_filter($data, function ($key) {
            return $key % 2 === 0;
        }, ARRAY_FILTER_USE_KEY);

        $intArray = array_filter($actual, function ($value) {
            return is_int($value);
        });
        $sum = 0;
        if (count($actual) === count($intArray)) {
            $sum = array_sum($intArray);
        } else {
            $this->expectException(InvalidArgumentException::class);
            $this->arrayTask->task_09($data);
        }

        $this->assertSame(
            $this->arrayTask->task_09($data),
            $sum
        );
    }

}