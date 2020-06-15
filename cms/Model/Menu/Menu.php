<?php

namespace Cms\Model\Menu;

use Engine\Core\Database\ActiveRecord;

class Menu
{
    use ActiveRecord;

    protected $table = 'menu';

    public $id;

    public $name;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
