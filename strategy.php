<?php

function foo($a, $b)
{
    if($a == $b) return 0;
    return $a < $b ? -1 : 1;
}
$a = [3, 2, 5, 6, 1];
usort($a, "foo");

interface Strategy
{
    function doOp($n1, $n2);
}

class Add implements Strategy
{
    function doOp($n1, $n2)
    {
        return $n1 + $n2;
    }
}

class Sub implements Strategy
{
    function doOp($n1, $n2)
    {
        return $n1 - $n2;
    }
}

class Mult implements Strategy
{
    function doOp($n1, $n2)
    {
        return $n1 * $n2;
    }
}
https://infostock.net/threads/lynda-com-osnovy-programmirovanija-veb-bezopasnost-rus.62686/
class Context
{
    private $s;
    function __construct(Strategy $s)
    {
        $this->s = $s;
    }

    function execute($n1, $n2)
    {
        return $this->s->doOp($n1, $n2);
    }
}
$c = new Context(new Add());
echo $c->execute(2, 3) . "<br>";