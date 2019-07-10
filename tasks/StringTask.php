<?php


namespace PhpTutorial\tasks;



use InvalidArgumentException;

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
        if (empty($str)) {
            throw new InvalidArgumentException();
        }
        if (strpos($str, '/') >= 0) {
            $tmp = explode('/', $str);
            return array_pop($tmp);
        }
        if (strpos($str, '\\') >= 0) {
            $tmp = explode('\\', $str);
            return array_pop($tmp);
        }
        return $str;
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

        $words = explode(' ', $str);
        $words = array_map('strtolower', $words);
        $words = array_map('ucfirst', $words);
        $camelCase = implode($words);
        return lcfirst($camelCase);
    }

    /**
     * Напишите функцию  которая обрезает строку, если она длиннее указанного количества символов n.
     * Усеченная строка должна заканчиваться троеточием «...»
     * Если последнее слово не влезает, удалите его
     * Input: 'Ярославский вокзал шибал свежестью' $n=22
     * Output: 'Ярославский вокзал...'
     * @param string $str
     * @param int $n
     * @return string
     */
    public function task_04(string $str, int $n): string
    {
        if(strlen($str) < $n || $n < 0){
            throw new InvalidArgumentException();
        }
        $string = wordwrap($str, $n);
        $string = explode("\n", $string, 2);
        $string = $string[0] . '...';
        return $string;
    }

    /** Напишите функцию, которая возвращает строку $str, очищенную от всех HTML-тегов.
     * Input: 'Ярославский <br/> вокзал <strong> шибал</strong> свежестью'
     * Output: 'Ярославский вокзал шибал свежестью'
     * @param string $str
     * @return string
     */
    public function task_05(string $str): string
    {
        return strip_tags($str);
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
        $words = explode(',', $str);
        $words = array_map('trim', $words);
        $words = array_unique($words);
        return implode(', ', $words);
    }

}