<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d4e721f81bcd0dc224226807736c10f
{
    public static $files = array (
        'c8abd53f2eaea2eaa0a7452f6fcc9061' => __DIR__ . '/../..' . '/engine/defines.php',
        '555aa7eb897c5c2fd17017acc152631e' => __DIR__ . '/../..' . '/engine/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Plugin\\' => 7,
        ),
        'E' => 
        array (
            'Engine\\DI\\' => 10,
            'Engine\\' => 7,
        ),
        'C' => 
        array (
            'Cms\\' => 4,
        ),
        'A' => 
        array (
            'Admin\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Plugin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/content/plugins',
        ),
        'Engine\\DI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine/DI',
        ),
        'Engine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine',
        ),
        'Cms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/cms',
        ),
        'Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d4e721f81bcd0dc224226807736c10f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d4e721f81bcd0dc224226807736c10f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d4e721f81bcd0dc224226807736c10f::$classMap;

        }, null, ClassLoader::class);
    }
}