<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit784f77c76270eee6b1d242585672d67b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aex\\Packagetest\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aex\\Packagetest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit784f77c76270eee6b1d242585672d67b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit784f77c76270eee6b1d242585672d67b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}