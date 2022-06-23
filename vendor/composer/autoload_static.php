<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde846c9b1f4769b63f257afcb075c368
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Marif\\XcodeLogin\\' => 17,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Marif\\XcodeLogin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde846c9b1f4769b63f257afcb075c368::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde846c9b1f4769b63f257afcb075c368::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitde846c9b1f4769b63f257afcb075c368::$classMap;

        }, null, ClassLoader::class);
    }
}
