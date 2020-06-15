<?php

namespace Engine\Core\Config;

class Config
{

    /**
     * @param $key
     * @param string $group
     * @return null
     */
    public static function item($key, $group = 'main')
    {
        if (!Repository::retrieve($group, $key)) {
            self::file($group);
        }

        return Repository::retrieve($group, $key);
    }

    public static function group($group)
    {
        if (!Repository::retrieveGroup($group)) {
            self::file($group);
        }

        return Repository::retrieveGroup($group);
    }

    /**
     * @param $group
     * @return bool|mixed
     * @throws \Exception
     */
    public static function file($group = 'main')
    {
        $path = path('config') . DS . $group . '.php';
        
        // Check that the exists before we attempt to load it.
        if(file_exists($path)) {
            // Get items from the file.
            $items = include $path;

            // Items must be an array.
            if(!empty($items)) {
                // Store items.
                foreach ($items as $key => $value) {
                    Repository::store($group, $key, $value);
                }

                // Successful file load.
                return true;
            } else {
                throw new \Exception(
                    sprintf(
                        'Config file <strong>%s</strong> is not a valid array.', $path
                    )
                );
            }
        } else {
            throw new \Exception(
                sprintf('Cannot load config from file, file <strong>%s</strong> does not exist.', $path)
            );
        }

        // File load failed
        return false;
    }
}
