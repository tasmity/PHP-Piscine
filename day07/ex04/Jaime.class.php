<?php


class Jaime extends Lannister
{
    public function sleepWith($user)
    {
        if ($user instanceof Tyrion)
            print("Not event if I'm drunk !" .PHP_EOL);
        else if ($user instanceof Sansa)
            print("Let's do this." .PHP_EOL);
        else if ($user instanceof Cersei)
            print("With pleasure, but only in a tower in Winterfell, then." .PHP_EOL);
    }
}