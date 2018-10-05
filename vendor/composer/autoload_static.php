<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7592ace339055d9afeed336555734433
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Log\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Log\\' => 
        array (
            0 => __DIR__ . '/../..' . '/log',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7592ace339055d9afeed336555734433::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7592ace339055d9afeed336555734433::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
