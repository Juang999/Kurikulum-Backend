<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d26bf5efb1ff7bece4020494ac7fa21
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Coba\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Coba\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Coba',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d26bf5efb1ff7bece4020494ac7fa21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d26bf5efb1ff7bece4020494ac7fa21::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}