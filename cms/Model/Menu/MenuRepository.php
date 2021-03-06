<?php

namespace Cms\Model\Menu;

use Engine\Model;

class MenuRepository extends Model
{
    public function add($params = [])
    {
        if (empty($params)) {
            return 0;
        }

        $menu = new Menu;
        $menu->setName($params['name']);
        $menuId = $menu->save();

        return $menuId;
    }

    public function getList()
    {
        $sql = $this->queryBuilder->select()
                    ->from('menu')
                    ->orderBy('id', 'ASC')
                    ->sql();

        return $this->db->query($sql);
    }
}
