<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit097e5119ce0f08bc1346cb69b5bc9207
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit097e5119ce0f08bc1346cb69b5bc9207::$classMap;

        }, null, ClassLoader::class);
    }
}