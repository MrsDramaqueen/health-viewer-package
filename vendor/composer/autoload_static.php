<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb2cf4ae64f018f6da0f29853bfa15a5
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Forlab\\HealthViewer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Forlab\\HealthViewer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb2cf4ae64f018f6da0f29853bfa15a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb2cf4ae64f018f6da0f29853bfa15a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb2cf4ae64f018f6da0f29853bfa15a5::$classMap;

        }, null, ClassLoader::class);
    }
}