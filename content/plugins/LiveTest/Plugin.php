<?php

namespace Plugin\LiveTest;

class Plugin extends \Engine\Plugin
{
    public function details()
    {
        return [
            'name'        => 'Live Test Plugin',
            'description' => 'Demonstraction plugin',
            'author'      => 'Ruslan Lazurenko',
            'icon'        => 'icon-leaf'
        ];
    }

    public function init()
    {
        echo 222;
    }
}
