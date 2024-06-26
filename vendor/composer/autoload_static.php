<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1780e00a5cd220378fd3108124c149dc
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CosmoIagica\\Contact\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CosmoIagica\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1780e00a5cd220378fd3108124c149dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1780e00a5cd220378fd3108124c149dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1780e00a5cd220378fd3108124c149dc::$classMap;

        }, null, ClassLoader::class);
    }
}
