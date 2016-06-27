<?php

class NumbersSquared implements Iterator
{
    private $start;
    private $end;
    private $current;

    function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    function rewind()
    {
        $this->current = $this->start;
    }

    function key()
    {
        return $this->current;
    }

    function valid()
    {
        return $this->current <= $this->end;
    }

    function next()
    {
        $this->current++;
    }

    function current()
    {
        return pow($this->current, 2);
    }
}


$nums = new NumbersSquared(15, 40);
foreach ($nums as $a => $b) {
    print "Квадрат числа {$a} = {$b}<br>";
}
