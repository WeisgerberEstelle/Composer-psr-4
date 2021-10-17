<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit930035eccfa348d26dde9da6bca965c4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Wcs\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Wcs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public/src/wcs',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit930035eccfa348d26dde9da6bca965c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit930035eccfa348d26dde9da6bca965c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit930035eccfa348d26dde9da6bca965c4::$classMap;

        }, null, ClassLoader::class);
    }
}
