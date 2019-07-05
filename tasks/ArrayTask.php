<?php


namespace PhpTutorial\tasks;



use InvalidArgumentException;

class ArrayTask
{


    /**
     * Найти сумму чисел от a до b
     * @param int $a
     * @param int $b
     * @return int
     */
    public function task_01(int $a, int $b): int
    {

    }

    /**
     * Создать массив из $n чисел, каждый элемент которого равен квадрату своего номера, начиная с 0
     * @param int $n
     * @return array
     */
    public function task_02(int $n): array
    {


    }
    /**
     * Вернуть все числа, меньшие $number и больше 0, у которых есть хотя бы одна цифра 3 и которые не делятся на 5.
     * @param int $number
     * @return array
     */
    public function task_03(int $number): array
    {

    }

    /**
     * Определите, есть ли в массиве повторяющиеся элементы
     * @param array $data
     * @return bool
     */
    public function task_04(array $data): bool
    {
       return count(array_unique($data))<count($data);
    }

    /**
     * Сортировать входящий массив $data по возростанию ключей
     * @param array $data
     * @return array
     */
    public function task_05(array $data): array
    {

    }

    /**
     * Поменять местами наибольший и наименьший целочисленные элементы массива.
     * @param array $data
     * @return array
     */
    public function task_06(array $data): array
    {

    }

    /**
     * Вернуть срез входящего массива $data, начинающийся с позиции $start длиной $length
     * @param array $data
     * @param int $start
     * @param int $length
     * @return array
     */
    public function task_07(array $data, int $start,int $length): array
    {

    }

    /**
     * Удалите в массиве повторы значений. Например, для массива [1, 2, 4, 4, 2, 5] результатом будет [1, 2, 4, 5]
     * @param array $data
     * @return array
     */
    public function task_08(array $data): array
    {
        return array_unique($data);
    }

    /**
     * Найдите сумму четных (по индексу), положительных, целочисленных элементов массива
     * @param array $data
     * @return int
     */
    public function task_09(array $data): int
    {

    }

    /**
     * Определить, какое число в массиве встречается чаще всего, если их несколько вернуть меньшее
     * @param array $data
     * @return int
     */
    public function task_10(array $data): int
    {

    }
}