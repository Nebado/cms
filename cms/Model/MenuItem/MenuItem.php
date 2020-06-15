<?php

namespace Cms\Model\MenuItem;

use Engine\Core\Database\ActiveRecord;

class MenuItem
{
    use ActiveRecord;

    protected $table = 'menu_item';

    public $id;

    public $menu_id;

    public $name;

    public $parent;

    public $position;

    public $link;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMenuId()
    {
        return $this->menu_id;
    }

    public function setMenuId($menu_id)
    {
        $this->menu_id = $menu_id;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }
}
