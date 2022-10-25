<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit80b3dcd16d59d3517c6806bb2ec8dab4
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

        spl_autoload_register(array('ComposerAutoloaderInit80b3dcd16d59d3517c6806bb2ec8dab4', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit80b3dcd16d59d3517c6806bb2ec8dab4', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit80b3dcd16d59d3517c6806bb2ec8dab4::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit80b3dcd16d59d3517c6806bb2ec8dab4::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire80b3dcd16d59d3517c6806bb2ec8dab4($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire80b3dcd16d59d3517c6806bb2ec8dab4($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
