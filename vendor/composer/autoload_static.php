<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1102413cad054608ed4e57bda7bc377
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1102413cad054608ed4e57bda7bc377::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1102413cad054608ed4e57bda7bc377::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1102413cad054608ed4e57bda7bc377::$classMap;

        }, null, ClassLoader::class);
    }
}
