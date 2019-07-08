<?php


namespace PhpTutorial\test\stringTests;


use PHPUnit\Framework\TestCase;

class Task_01_Test extends StringBase
{


    public function testEmpty()
    {
        $this->assertSame($this->stringTask->task_01(''), 0);
    }

    public function stringDataProvider()
    {
        $provider = [];
        for ($k = 0; $k< 10; $k ++) {
            $faker = \Faker\Factory::create();
            $str = '';
            $n = rand(10, 100);
            for ($i = 0; $i < $n; $i++) {
                $count = rand(1, 10);
                $spaces = str_repeat(' ', $count);
                $str = $str . $spaces . $faker->word;
            }
            $provider[] = array($str, $n);
        }
        return $provider;
    }

    /**
     * @dataProvider stringDataProvider
     * @param string $str
     * @param int $n
     */
    public function testTask(string $str, int $n)
    {
        $this->assertSame($this->stringTask->task_01($str), $n);
    }



}