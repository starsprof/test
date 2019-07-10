<?php


namespace PhpTutorial\test\stringTests;


use InvalidArgumentException;

class Task_02_Test extends StringBase
{

    public function testEmpty()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->stringTask->task_02('');
    }

    public function provider(string $glue)
    {
        $path = implode($glue, $this->faker->words($this->faker->numberBetween(2,10)));
        $file = $this->faker->word . '.' . $this->faker->fileExtension;
        $path .= '/' . $file;
        return [$path, $file];
    }

    public function linuxProvider()
    {
        $provider = [];
        for($i = 0; $i<10; $i++){
            $provider[] = $this->provider('/');
        }
        return $provider;
    }

    public function windowsProvider()
    {
        $provider = [];
        for($i = 0; $i<10; $i++){
            $provider[] = $this->provider('\\');
        }
        return $provider;
    }

    public function testLocalPath()
    {
        $file = $this->faker->word . '.' . $this->faker->fileExtension;
        $this->assertSame($this->stringTask->task_02($file), $file);
    }

    /**
     * @dataProvider windowsProvider
     * @param string $path
     * @param string $file
     */
    public function testWindowsPath(string $path, string $file)
    {
        $this->assertSame($this->stringTask->task_02($path),$file);
    }

    /**
     * @dataProvider linuxProvider
     * @param string $path
     * @param string $file
     */
    public function testLinuxPath(string $path, string $file)
    {
        $this->assertSame($this->stringTask->task_02($path),$file);
    }

}