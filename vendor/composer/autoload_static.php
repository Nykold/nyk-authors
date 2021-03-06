<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb09221a64d088b03deb7944571d1557
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\NykAuthors\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\NykAuthors\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\NykAuthorsPlugin' => __DIR__ . '/../..' . '/nyk-authors.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb09221a64d088b03deb7944571d1557::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb09221a64d088b03deb7944571d1557::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb09221a64d088b03deb7944571d1557::$classMap;

        }, null, ClassLoader::class);
    }
}
