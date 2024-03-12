<?php

class  Problem
{
    public function calc($n)
    {
        if (!is_int($n) || $n < 0) {
            return null;
        }
        if ($n == 0 || $n == 1) {
            return 1;
        }
        return $n * $this->calc($n - 1);
    }
}
?>