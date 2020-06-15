<?php

namespace Plugin\ExamplePlugin;

class Plugin extends \Engine\Plugin
{
    public function details()
    {
        return [
            'name'        => 'Plugin Demo',
            'description' => 'Demonstraction plugin',
            'author'      => 'Ruslan Lazurenko',
            'icon'        => 'icon-leaf'
        ];
    }

    public function init()
    {
        
    }
}
