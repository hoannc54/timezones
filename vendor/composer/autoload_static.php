<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94fa795daa1462debc644e173b345f0b
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hoannc\\Timezones\\' => 17,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hoannc\\Timezones\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/hoannc54/timezones/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94fa795daa1462debc644e173b345f0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94fa795daa1462debc644e173b345f0b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}