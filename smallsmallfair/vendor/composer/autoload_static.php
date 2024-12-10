<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4e31d1a6156fd82bafbc804ce4cb645
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appwrite\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appwrite\\' => 
        array (
            0 => __DIR__ . '/..' . '/appwrite/appwrite/src/Appwrite',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4e31d1a6156fd82bafbc804ce4cb645::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4e31d1a6156fd82bafbc804ce4cb645::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite4e31d1a6156fd82bafbc804ce4cb645::$classMap;

        }, null, ClassLoader::class);
    }
}
