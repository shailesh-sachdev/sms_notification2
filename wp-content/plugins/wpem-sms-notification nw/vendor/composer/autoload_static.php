<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit746b20c02fe389a2e9c708284d758324
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit746b20c02fe389a2e9c708284d758324::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit746b20c02fe389a2e9c708284d758324::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit746b20c02fe389a2e9c708284d758324::$classMap;

        }, null, ClassLoader::class);
    }
}
