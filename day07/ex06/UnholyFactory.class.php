<?php


class UnholyFactory
{
    private $_user = [];

    public function absorb($object)
    {
        if ($object instanceof Fighter)
        {
            if (array_key_exists($object->getName(), $this->_user))
                print("(Factory already absorbed a fighter of type ".
                    $object->getName() . ")" . PHP_EOL);
            else
            {
                $this->_user[$object->getName()] = $object;
                print("(Factory absorbed a fighter of type ".
                    $object->getName() . ")" . PHP_EOL);
            }
        }
        else
        {
            print("(Factory can't absorb this, it's not a fighter)".
                PHP_EOL);
        }
    }

    public function fabricate($rf)
    {
        if (array_key_exists($rf, $this->_user))
        {
            print("(Factory fabricates a fighter of type " . $rf . ")".
                PHP_EOL);
            return (clone ($this->_user[$rf]));
        }
        print("(Factory hasn't absorbed any fighter of type " . $rf . ")".
            PHP_EOL);
        return (null);
    }
}