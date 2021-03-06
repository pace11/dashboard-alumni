<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitaa06ea77589fbdcce1f3273ea85cf2f5
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

        spl_autoload_register(array('ComposerAutoloaderInitaa06ea77589fbdcce1f3273ea85cf2f5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitaa06ea77589fbdcce1f3273ea85cf2f5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitaa06ea77589fbdcce1f3273ea85cf2f5::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitaa06ea77589fbdcce1f3273ea85cf2f5::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequireaa06ea77589fbdcce1f3273ea85cf2f5($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequireaa06ea77589fbdcce1f3273ea85cf2f5($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
