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
        if($a >= $b) {
            throw new InvalidArgumentException();
        }

        $sum = 0;
        for($i = $a; $i<=$b; $i++){
            $sum += $i;
        }
        return $sum;
    }

    /**
     * Создать массив из $n чисел, каждый элемент которого равен квадрату своего номера, начиная с 0
     * @param int $n
     * @return array
     */
    public function task_02(int $n): array
    {
        if ($n < 0) {
            throw new InvalidArgumentException();
        }
        $result = [];
        for ($i = 0; $i < $n; $i++) {
            $result[$i] = $i * $i;
        }
        return $result;

    }
    /**
     * Вернуть все числа, меньшие $number и больше 0, у которых есть хотя бы одна цифра 3 и которые делятся на 5.
     * @param int $number
     * @return array
     */
    public function task_03(int $number): array
    {
        if($number < 0){
            throw new \InvalidArgumentException();
        }

        $result = [];
        for($i = 0; $i <= $number; $i++){
            if($i % 5 === 0 && (strpos((string)$i, '3') !== false)){
                $result[] = $i;
            }
        }
        return $result;
    }

    /**
     * Определите, есть ли в массиве повторяющиеся элементы
     * @param array $data
     * @return bool
     */
    public function task_04(array $data): bool
    {
        return array_unique($data) !== $data;
    }

    /**
     * Сортировать входящий массив $data по возростанию ключей
     * @param array $data
     * @return array
     */
    public function task_05(array $data): array
    {
        ksort($data);
        return $data;
    }

    /**
     * Поменять местами наибольший и наименьший целочисленные элементы массива.
     * @param array $data
     * @return array
     */
    public function task_06(array $data): array
    {
        if(empty($data)){
            throw new InvalidArgumentException();
        }

        $min = min($data);
        $max = max($data);
        $minIndex = array_search($min, $data);
        $maxIndex = array_search($max, $data);
        $data[$minIndex] = $max;
        $data[$maxIndex] = $min;
        return $data;
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
        if($start>count($data)-1){
            throw new InvalidArgumentException();
        }
        if (empty($data)){
            throw new InvalidArgumentException();
        }
        if($start+$length > count($data) -1){
            throw new InvalidArgumentException();
        }
        if($length < 0){
            throw new InvalidArgumentException();
        }
        return array_slice($data, $start, $length);
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
        $sum = 0;
        for ($i = 0; $i < count($data); $i+=2){
            $value = $data[$i];
            if(!is_int($value)){
                throw new InvalidArgumentException();
            }
            if($value > 0){
                $sum += $value;
            }
        }
        return $sum;
    }

    /**
     * Определить, какое число в массиве встречается чаще всего, если их несколько вернуть меньшее
     * @param array $data
     * @return int
     */
    public function task_10(array $data): int
    {
        if(empty($data)){
            throw new InvalidArgumentException();
        }
        $values = array_count_values($data);
        ksort($values);
        $max = max($values);
        return array_search($max, $values);
    }
}