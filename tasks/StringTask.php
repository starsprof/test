<?php


namespace PhpTutorial\tasks;


class StringTask
{

    /**
     * Функцию, котороая считает кол-во слов в строке
     * @param string $str
     * @return int
     */
    public function task_01(string $str): int
    {
        $words = explode(' ', $str);
        $result = [];
        foreach ($words as $word){
            if(!empty($word)){
                $result[] = $word;
            }
        }
        return count($result);
    }

    /**
     * Написать функцию, которая возвращает имя файла, из исходного пути
     * Input: C:/documents/my/file.txt
     * Output: 'file.txt'
     * @param string $str
     * @return string
     */
    public function task_02(string $str): string
    {

    }

    /**
     * Написать функцию перевода строки в camelCase
     * Input: 'HelLo wOrLd vAsYa'
     * Output: 'helloWorldVasya'
     * @param string $str
     * @return string
     */
    public function task_03(string  $str): string
    {

    }

    /**
     * Напишите функцию  которая обрезает строку, если она длиннее указанного количества символов n.
     * Усеченная строка должна заканчиваться троеточием «...»
     * Если последнее слово не влезает, удалите его
     * Input: 'Ярославский вокзал шибал свежестью' $n=22
     * Output: 'Ярославский вокзал...'
     * @param string $str
     * @return string
     */
    public function task_04(string $str, $n): string
    {

    }

    /** Напишите функцию, которая возвращает строку $str, очищенную от всех HTML-тегов.
     * Input: 'Ярославский <br/> вокзал <strong> шибал</strong> свежестью'
     * Output: 'Ярославский вокзал шибал свежестью'
     * @param string $str
     * @return string
     */
    public function task_05(string $str): string
    {

    }

    /**
     * Напишите функцию, которая возвращает строку, очищенную от слов-дупликатов,
     * т.е. каждое слово должно повторяться не более одного раза.
     * Input: 'вишня, груша, слива, груша'
     * Output: 'вишня, слива, груша
     * @param string $str
     * @return string
     */
    public function task_06(string $str): string
    {

    }

}