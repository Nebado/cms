<?php

namespace Cms\Controller;

class HomeController extends CmsController
{
    public function index()
    {
        $data = ['name' => 'Nebado'];
        $this->view->render('index', $data);
    }

    public function news($id)
    {
        echo 'news ' . $id;
    }
}
