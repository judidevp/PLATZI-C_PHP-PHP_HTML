<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75bdd4dced171b688c6bb6434fe87449
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit75bdd4dced171b688c6bb6434fe87449::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75bdd4dced171b688c6bb6434fe87449::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit75bdd4dced171b688c6bb6434fe87449::$classMap;

        }, null, ClassLoader::class);
    }
}
