<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita5060bf421234b6d23eaff50ee83c59b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInita5060bf421234b6d23eaff50ee83c59b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita5060bf421234b6d23eaff50ee83c59b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita5060bf421234b6d23eaff50ee83c59b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
