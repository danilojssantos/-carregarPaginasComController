<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf31a17fb12f2b7813466d27400eb4fe8
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf31a17fb12f2b7813466d27400eb4fe8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf31a17fb12f2b7813466d27400eb4fe8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
