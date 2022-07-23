<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc868c86bf7cdf1f0b55ecab9e037a705
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitc868c86bf7cdf1f0b55ecab9e037a705', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc868c86bf7cdf1f0b55ecab9e037a705', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc868c86bf7cdf1f0b55ecab9e037a705::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}