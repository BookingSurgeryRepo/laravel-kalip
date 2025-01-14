<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd65039f270ec120d3b3b07a0b91c3209
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

        spl_autoload_register(array('ComposerAutoloaderInitd65039f270ec120d3b3b07a0b91c3209', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd65039f270ec120d3b3b07a0b91c3209', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd65039f270ec120d3b3b07a0b91c3209::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
