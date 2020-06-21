<?php


class NightsWatch
{
    private $_recruits = [];

    public function recruit($user)
    {
        $this->_recruits[] = $user;
    }

    public function fight()
    {
        foreach ($this->_recruits as $new)
        {
            if (method_exists($new, 'fight'))
                $new->fight();
        }
    }
}