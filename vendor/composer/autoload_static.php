<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5bbb6cec10aa746f652cd466dc0b97d8
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kornrunner\\' => 11,
        ),
        'H' => 
        array (
            'Hathoriel\\Utils\\' => 16,
            'Hathoriel\\Tatum\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kornrunner\\' => 
        array (
            0 => __DIR__ . '/..' . '/kornrunner/keccak/src',
        ),
        'Hathoriel\\Utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/tatum/utils/src',
        ),
        'Hathoriel\\Tatum\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
            1 => __DIR__ . '/../..' . '/src/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Hathoriel\\Tatum\\Activator' => __DIR__ . '/../..' . '/inc/Activator.php',
        'Hathoriel\\Tatum\\Assets' => __DIR__ . '/../..' . '/inc/Assets.php',
        'Hathoriel\\Tatum\\Core' => __DIR__ . '/../..' . '/inc/Core.php',
        'Hathoriel\\Tatum\\Localization' => __DIR__ . '/../..' . '/inc/Localization.php',
        'Hathoriel\\Tatum\\base\\Core' => __DIR__ . '/../..' . '/inc/base/Core.php',
        'Hathoriel\\Tatum\\base\\UtilsProvider' => __DIR__ . '/../..' . '/inc/base/UtilsProvider.php',
        'Hathoriel\\Tatum\\hooks\\Admin' => __DIR__ . '/../..' . '/inc/hooks/Admin.php',
        'Hathoriel\\Tatum\\hooks\\PublicHooks' => __DIR__ . '/../..' . '/inc/hooks/PublicHooks.php',
        'Hathoriel\\Tatum\\rest\\SetupRest' => __DIR__ . '/../..' . '/inc/rest/SetupRest.php',
        'Hathoriel\\Tatum\\tatum\\AddressValidator' => __DIR__ . '/../..' . '/inc/tatum/AddressValidator.php',
        'Hathoriel\\Tatum\\tatum\\BlockchainLink' => __DIR__ . '/../..' . '/inc/tatum/BlockchainLink.php',
        'Hathoriel\\Tatum\\tatum\\Chains' => __DIR__ . '/../..' . '/inc/tatum/Chains.php',
        'Hathoriel\\Tatum\\tatum\\Connector' => __DIR__ . '/../..' . '/inc/tatum/Connector.php',
        'Hathoriel\\Tatum\\tatum\\Estimate' => __DIR__ . '/../..' . '/inc/tatum/Estimate.php',
        'Hathoriel\\Tatum\\tatum\\Ipfs' => __DIR__ . '/../..' . '/inc/tatum/Ipfs.php',
        'Hathoriel\\Tatum\\tatum\\LazyMint' => __DIR__ . '/../..' . '/inc/tatum/LazyMint.php',
        'Hathoriel\\Tatum\\tatum\\Preferences' => __DIR__ . '/../..' . '/inc/tatum/Preferences.php',
        'Hathoriel\\Tatum\\tatum\\Setup' => __DIR__ . '/../..' . '/inc/tatum/Setup.php',
        'Hathoriel\\Tatum\\view\\menu\\Page' => __DIR__ . '/../..' . '/inc/view/menu/Page.php',
        'Hathoriel\\Tatum\\view\\widget\\Widget' => __DIR__ . '/../..' . '/inc/view/widget/Widget.php',
        'Hathoriel\\Utils\\Activator' => __DIR__ . '/..' . '/tatum/utils/src/Activator.php',
        'Hathoriel\\Utils\\Assets' => __DIR__ . '/..' . '/tatum/utils/src/Assets.php',
        'Hathoriel\\Utils\\Base' => __DIR__ . '/..' . '/tatum/utils/src/Base.php',
        'Hathoriel\\Utils\\Core' => __DIR__ . '/..' . '/tatum/utils/src/Core.php',
        'Hathoriel\\Utils\\Localization' => __DIR__ . '/..' . '/tatum/utils/src/Localization.php',
        'Hathoriel\\Utils\\PackageLocalization' => __DIR__ . '/..' . '/tatum/utils/src/PackageLocalization.php',
        'Hathoriel\\Utils\\PluginReceiver' => __DIR__ . '/..' . '/tatum/utils/src/PluginReceiver.php',
        'Hathoriel\\Utils\\Service' => __DIR__ . '/..' . '/tatum/utils/src/Service.php',
        'kornrunner\\Keccak' => __DIR__ . '/..' . '/kornrunner/keccak/src/Keccak.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5bbb6cec10aa746f652cd466dc0b97d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5bbb6cec10aa746f652cd466dc0b97d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5bbb6cec10aa746f652cd466dc0b97d8::$classMap;

        }, null, ClassLoader::class);
    }
}
