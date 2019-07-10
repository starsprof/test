<?php


namespace PhpTutorial\test\stringTests;


class Task_04_Test extends StringBase
{
    public function testEmpty()
    {
        $this->assertSame($this->stringTask->task_04('', 0), '...');
    }

    public function testMinusN()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->stringTask->task_04('', -1);
    }

    public function testException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->stringTask->task_04('a', 2);
    }

    public function dataProvider()
    {
        $provider = [];
        for($i = 0; $i <10; $i++){
            $str = $this->faker->words($this->faker->numberBetween(1,20), true);
            $n = $this->faker->numberBetween(1, strlen($str));
            $provider[] = array($str, $n);
        }
        return $provider;
    }

    /**
     * @dataProvider dataProvider
     * @param string $str
     * @param int $n
     */
    public function testTask(string $str, int $n)
    {
        $string = wordwrap($str, $n);
        $string = explode("\n", $string, 2);
        $string = $string[0] . '...';

        $this->assertSame($this->stringTask->task_04($str, $n), $string);
    }
}