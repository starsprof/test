<?php


namespace PhpTutorial\test\stringTests;


class Task_05_Test extends StringBase
{
    public function testEmpty()
    {
        $this->assertEmpty($this->stringTask->task_05(''));
    }

    public function dataProvider()
    {
        $provider = [];
        for($i = 0; $i < 10; $i++){
            $provider[] = array($this->faker->randomHtml());
        }
        return $provider;
    }

    /**
     * @dataProvider dataProvider
     * @param string $str
     */
    public function testTask(string $str)
    {
        $this->assertSame($this->stringTask->task_05($str), strip_tags($str));
    }
}