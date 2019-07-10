<?php


namespace PhpTutorial\test\stringTests;


class Task_06_Test extends StringBase
{
    public function testEmpty()
    {
        $this->assertEmpty($this->stringTask->task_06(''));
    }

    public function dataProvider()
    {
        $provider = [];
        for($k = 0; $k < 10; $k ++) {
            $words = $this->faker->words($this->faker->numberBetween(20, 100));
            $words = array_unique($words);
            $original = implode(', ', $words);
            $n = $this->faker->numberBetween(5, 10);
            for ($i = 0; $i < $n; $i++) {
                $words[] = $words[array_rand($words)];
            }
            $str = implode(', ', $words);
            $provider[] = array($str, $original);
        }
        return $provider;
    }

    /**
     * @dataProvider dataProvider
     * @param string $str
     * @param string $original
     */
    public function testTask(string $str, string $original)
    {
        $this->assertSame($this->stringTask->task_06($str), $original);
    }

}