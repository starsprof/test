<?php

namespace PhpTutorial\test\arrayTests;

use PhpTutorial\tasks\ArrayTask;
use PHPUnit\Framework\TestCase;
//ini_set('memory_limit', '512M');
class ArrayBase extends TestCase
{
    /**
     * @var ArrayTask
     */
    protected $arrayTask;


    protected function setUp(): void
    {
        $this->arrayTask = new ArrayTask();

    }

    protected function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}