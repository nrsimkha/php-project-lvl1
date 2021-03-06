<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7a955ab37b129a32d61b29c5c2545e2
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '28c4b20c8c850e7052d1a5242c28f266' => __DIR__ . '/../..' . '/src/Games/even.php',
        '79976e5e962b2f74471a6b305a64b5c5' => __DIR__ . '/../..' . '/src/Games/calc.php',
        '9cba5a62b91d3d7e89e2aada014a0aba' => __DIR__ . '/../..' . '/src/engine.php',
        '4370ec4a92e66aef5e15cc921ed97d22' => __DIR__ . '/../..' . '/src/Games/gcd.php',
        'd4b9269cc966cc94370a905fefc18f82' => __DIR__ . '/../..' . '/src/Games/progression.php',
        'f85762af558e5c03c093759b5a022eb2' => __DIR__ . '/../..' . '/src/Games/prime.php',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite7a955ab37b129a32d61b29c5c2545e2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
