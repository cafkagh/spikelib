<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16412ca8824ae6eb9bc771387c39aafb
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spikelib\\Grpc\\Hardware\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spikelib\\Grpc\\Hardware\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/grpc/hardware',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16412ca8824ae6eb9bc771387c39aafb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16412ca8824ae6eb9bc771387c39aafb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16412ca8824ae6eb9bc771387c39aafb::$classMap;

        }, null, ClassLoader::class);
    }
}
