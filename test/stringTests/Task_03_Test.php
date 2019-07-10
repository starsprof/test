<?php


namespace PhpTutorial\test\stringTests;


use foo\bar;

class Task_03_Test extends StringBase
{

    public function dataProvider()
    {
        $faker = $this->faker;
        $provider = [];
        for($i = 0; $i < 10; $i++) {
            $words = $faker->words($faker->numberBetween(2, 10));

            $camelCase = array_map(function ($word) {
                return ucfirst($word);
            }, $words);

            $camelCase = implode($camelCase);
            $camelCase = lcfirst($camelCase);

            $words = array_map(function ($word) use ($faker) {
                $chars = str_split($word);
                array_walk($chars, function (&$char) use ($faker) {
                    if ($faker->boolean()) {
                        $char = strtoupper($char);
                    }
                });
                return implode($chars);
            }, $words);
            $provider[] = array( implode(' ', $words), $camelCase);
        }
        return $provider;
    }

    public function testEmpty()
    {
        $this->assertSame($this->stringTask->task_03(''), '');
    }

    /**
     * @dataProvider dataProvider
     * @param string $str
     * @param string $camelCase
     */
    public function testTask(string $str, string $camelCase)
    {
        $this->assertSame($this->stringTask->task_03($str), $camelCase);
    }

}