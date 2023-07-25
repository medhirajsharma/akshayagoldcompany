<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf33d107b5ecf2ae49aead938cf0bc3bf
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf33d107b5ecf2ae49aead938cf0bc3bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf33d107b5ecf2ae49aead938cf0bc3bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf33d107b5ecf2ae49aead938cf0bc3bf::$classMap;

        }, null, ClassLoader::class);
    }
}
