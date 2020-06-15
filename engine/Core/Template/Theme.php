<?php

namespace Engine\Core\Template;

use \Engine\Core\Config\Config;

class Theme
{
    const RULES_NAME_FILE = [
        'header' => 'header-%s.php',
        'footer' => 'footer-%s.php',
        'sidebar' => 'sidebar-%s.php',
        'block'   => '%s',
    ];

    const URL_THEME_MASK = '%s/content/themes/%s';

    protected static $url = '';

    protected static $data = [];

    public $asset;

    public $theme;

    public function __construct()
    {
        $this->theme = $this;
        $this->asset = new Asset();
    }

    public static function getUrl()
    {
        $currentTheme = Config::item('defaultTheme', 'main');
        $baseUrl      = Config::item('baseUrl', 'main');

        return sprintf(self::URL_THEME_MASK, $baseUrl, $currentTheme);
    }

    public static function title()
    {
        $nameSite    = Setting::get('name_site');
        $description  = Setting::get('description');

        echo $nameSite . ' | ' . $description;
    }

    public static function header($name = null)
    {
        $name = (string) $name;
        $file = self::detectNameFile($name, __FUNCTION__);

        Component::load($file);
    }

    public static function footer($name = '')
    {
        $name = (string) $name;
        $file = self::detectNameFile($name, __FUNCTION__);

        Component::load($file);
    }

    public static function sidebar($name = '')
    {
        $name = (string) $name;
        $file = self::detectNameFile($name, __FUNCTION__);

        Component::load($file);        
    }

    public static function block($name = '', $data = [])
    {
        $name = (string) $name;

        if ($name !== '') {
            Component::load($name, $data);
        }
    }

    private static function detectNameFile($name, $function)
    {
        return empty(trim($name)) ? $function : sprintf(self::RULES_NAME_FILE[$function], $name);
    }

    /**
     * @return array
     */
    public static function getData()
    {
        return static::$data;
    }

    /**
     * @param array $data
     */
    public static function setData($data)
    {
        static::$data = $data;
    }
}
