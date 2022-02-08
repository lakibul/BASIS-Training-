<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10961beeee8f29af8525a81d8ef790f9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit10961beeee8f29af8525a81d8ef790f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10961beeee8f29af8525a81d8ef790f9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit10961beeee8f29af8525a81d8ef790f9::$classMap;

        }, null, ClassLoader::class);
    }
}
