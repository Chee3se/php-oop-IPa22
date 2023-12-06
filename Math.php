<?php
class Math {
    static function addTwo(int $a, int $b) {
        return $a + $b;
    }
    static function factorial(int $a) {
        $res = $a;
        while ($a!=1) {
            $a--;
            $res*=$a;
        }
        return $res;
    }
    static function sum(array $arr) {
        $sum = 0;
        foreach ($arr as $num) {
            $sum+=$num;
        }
        return $sum;
    }
    static function average(array $arr) {
        $sum = 0;
        $count = 0;
        foreach ($arr as $num) {
            $count++;
            $sum+=$num;
        }
        return $sum/$count;
    }
    static function max(array $arr) {
        $max = $arr[0];
        foreach ($arr as $num) {
            if ($num>$max) {
                $max=$num;
            }
        }
        return $max;
    }
}