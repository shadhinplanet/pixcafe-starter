<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5060bf421234b6d23eaff50ee83c59b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pixcafe\\Starter\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pixcafe\\Starter\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita5060bf421234b6d23eaff50ee83c59b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5060bf421234b6d23eaff50ee83c59b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita5060bf421234b6d23eaff50ee83c59b::$classMap;

        }, null, ClassLoader::class);
    }
}
