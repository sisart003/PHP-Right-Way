<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitabc3888cf71024dbd8acf1b2f48ec5d8
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

        spl_autoload_register(array('ComposerAutoloaderInitabc3888cf71024dbd8acf1b2f48ec5d8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitabc3888cf71024dbd8acf1b2f48ec5d8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitabc3888cf71024dbd8acf1b2f48ec5d8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
