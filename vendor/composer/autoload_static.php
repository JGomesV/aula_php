<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34045489d1e569b5beabab329800ae7c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\PrimeiraAulaphp\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\PrimeiraAulaphp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34045489d1e569b5beabab329800ae7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34045489d1e569b5beabab329800ae7c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34045489d1e569b5beabab329800ae7c::$classMap;

        }, null, ClassLoader::class);
    }
}
