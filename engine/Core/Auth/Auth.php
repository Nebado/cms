<?php

namespace Engine\Core\Auth;

use Engine\Helper\Cookie;

class Auth implements AuthInterface
{
    /**
     * @var bool
     */
    protected $authorized = false;
    protected $hash_user;

    /**
     * @return bool
     */
    public function authorized()
    {
        return $this->authorized;
    }

    /**
     * @return mixed
     */
    public function hashUser()
    {
        return Cookie::get('auth_user');
    }

    /**
     * User authoriation
     * @param $user
     */
    public function authorize($user)
    {
        $result = Cookie::set('auth_authorized', true);
        echo gettype($result);
        Cookie::set('auth_user', $user);
    }

     /**
     * User unauthoriation
     * @return void
     */
    public function unAuthorize()
    {
        Cookie::delete('auth_authorized');
        Cookie::delete('auth_user');
    }

    /**
     * Generates a new random password salt
     */
    public static function salt()
    {
        return (string) rand(100000000, 999999999);
    }

    /**
     * Generates a hash
     * @param string $password
     * @param string $salt
     * @return string
     */
    public static function encryptPassword($password, $salt = '')
    {
        return hash('sha256', $password . $salt);
    }
}
