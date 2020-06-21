<?php


class Tyrion extends Lannister
{
    public function sleepWith($user)
    {
        if ($user instanceof Lannister)
            print("Not event if I'm drunk !" .PHP_EOL);
        else if ($user instanceof Sansa)
            print("Let's do this." .PHP_EOL);
    }
}