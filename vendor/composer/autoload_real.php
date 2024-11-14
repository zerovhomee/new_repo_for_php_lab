<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitba98d22115e44cef3e0f670ac28b9fe5
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

        spl_autoload_register(array('ComposerAutoloaderInitba98d22115e44cef3e0f670ac28b9fe5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitba98d22115e44cef3e0f670ac28b9fe5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitba98d22115e44cef3e0f670ac28b9fe5::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}