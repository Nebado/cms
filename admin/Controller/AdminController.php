<?php

namespace Admin\Controller;

use Engine\Controller;
use Engine\Core\Auth\Auth;

class AdminController extends Controller
{
    /**
     * @var Auth
     */
    protected $auth;

    public $data = [];
    
    /**
     * AdminController constructor.
     * @param \Engine\DI\DI $di
     */
    public function __construct($di)
    {
        parent::__construct($di);

        $this->auth = new Auth();

        if ($this->auth->hashUser() == null) {
            header('Location: /admin/login/');
            exit;
        }

        // Load global languag
        $this->load->language('dashboard/menu');
    }

    public function checkAuthorization()
    {

    }

    public function logout()
    {
        $this->auth->unAuthorize();
        header('Location: /admin/login/');
        exit;
    }
}
