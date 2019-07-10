<?php


namespace PhpTutorial\test\stringTests;

use Faker\Factory;
use Faker\Generator;
use PhpTutorial\tasks\StringTask;
use PHPUnit\Framework\TestCase;

class StringBase extends TestCase
{
    /**
     * @var StringTask
     */
    protected $stringTask;
    /**
     * @var Generator
     */
    protected $faker;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->faker = Factory::create();
    }

    public function setUp(): void
    {
        parent::setUp();
        $this->stringTask = new StringTask();

    }

}