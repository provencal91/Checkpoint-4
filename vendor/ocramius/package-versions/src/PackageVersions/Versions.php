<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => 'v2.10.1@c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8',
  'doctrine/doctrine-bundle' => '2.0.7@6926771140ee87a823c3b2c72602de9dda4490d3',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.0@4d763ca4c925f647b248b9fa01b5f47aa3685d62',
  'doctrine/persistence' => '1.3.6@5dd3ac5eebef2d0b074daa4440bb18f93132dee4',
  'doctrine/reflection' => 'v1.1.0@bc420ead87fdfe08c03ecc3549db603a45b06d4c',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'ocramius/package-versions' => '1.4.2@44af6f3a2e2e04f2af46bcb302ad9600cba41c7d',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'sensio/framework-extra-bundle' => 'v5.5.3@98f0807137b13d0acfdf3c255a731516e97015de',
  'symfony/asset' => 'v5.0.3@447190a24309da88f816313824d85c303035f86b',
  'symfony/cache' => 'v5.0.3@b503e72c8e2fa55eed9e2d3dd6a166f3eaaabb9a',
  'symfony/cache-contracts' => 'v2.0.1@23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16',
  'symfony/config' => 'v5.0.3@7640c6704f56bf64045066bc5d93fd9d664baa63',
  'symfony/console' => 'v5.0.3@345ab6ecb456b5147ea3b3271d7f1f00aadfd257',
  'symfony/dependency-injection' => 'v5.0.3@5a56807650c7258bbcc4a15a020904958c70247e',
  'symfony/doctrine-bridge' => 'v5.0.3@1eda484039e4460101f945470d28ae6e8bdcf0e5',
  'symfony/dotenv' => 'v5.0.3@8331da80cc35fe903db0ff142376d518804ff1b1',
  'symfony/error-handler' => 'v5.0.3@95f64c1d7dfb86a722dc9d278d0edf5176eff16e',
  'symfony/event-dispatcher' => 'v5.0.3@4a7a8cdca1120c091b4797f0e5bba69c1e783224',
  'symfony/event-dispatcher-contracts' => 'v2.0.1@af23c2584d4577d54661c434446fb8fbed6025dd',
  'symfony/filesystem' => 'v5.0.3@3afadc0f57cd74f86379d073e694b0f2cda2a88c',
  'symfony/finder' => 'v5.0.3@4176e7cb846fe08f32518b7e0ed8462e2db8d9bb',
  'symfony/flex' => 'v1.6.1@c497c0c77cb9018cccd9c092832ebf9826612f92',
  'symfony/framework-bundle' => 'v5.0.3@cc59bc797b77c6ecccd6c87d9052f6b3eb6a8d63',
  'symfony/http-foundation' => 'v5.0.3@5dc0db5026f2b611cb8910a1f465e95eafd84c2e',
  'symfony/http-kernel' => 'v5.0.3@9e31e5e11cbe038cbb853beb3e3bb6e4f2500259',
  'symfony/mime' => 'v5.0.3@2a3c7fee1f1a0961fa9cf360d5da553d05095e59',
  'symfony/orm-pack' => 'v1.0.7@c57f5e05232ca40626eb9fa52a32bc8565e9231c',
  'symfony/polyfill-intl-idn' => 'v1.13.1@6f9c239e61e1b0c9229a28ff89a812dc449c3d46',
  'symfony/polyfill-mbstring' => 'v1.13.1@7b4aab9743c30be783b73de055d24a39cf4b954f',
  'symfony/polyfill-php73' => 'v1.13.1@4b0e2222c55a25b4541305a053013d5647d3a25f',
  'symfony/routing' => 'v5.0.3@7da33371d8ecfed6c9d93d87c73749661606f803',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v5.0.3@5d9add8034135b9a5f7b101d1e42c797e7f053e4',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/twig-bridge' => 'v5.0.3@39cc296147e010af3c13d7734a21528426bd46ff',
  'symfony/twig-bundle' => 'v5.0.3@1bd6192a7742d7807b9ecd0eff347ea549a19390',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/var-dumper' => 'v5.0.3@ccb1be566ae15f790020f917f06d1da0b04fe47b',
  'symfony/var-exporter' => 'v5.0.3@960f9ac0fdbd642461ed29d7717aeb2a94d428b9',
  'symfony/webpack-encore-bundle' => 'v1.7.2@787c2fdedde57788013339f05719c82ce07b6058',
  'symfony/yaml' => 'v5.0.3@69b44e3b8f90949aee2eb3aa9b86ceeb01cbf62a',
  'twig/extra-bundle' => 'v3.0.1@ce5c97dd566d9acd5d1fbd5eb76b6d264614725a',
  'twig/twig' => 'v3.0.1@28f856a4c57eeb24485916e8a68403f41a133616',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'paragonie/random_compat' => '2.*@e0ea942129bf1d4f797d4473abeb6da9c1063b1a',
  'symfony/polyfill-ctype' => '*@e0ea942129bf1d4f797d4473abeb6da9c1063b1a',
  'symfony/polyfill-iconv' => '*@e0ea942129bf1d4f797d4473abeb6da9c1063b1a',
  'symfony/polyfill-php72' => '*@e0ea942129bf1d4f797d4473abeb6da9c1063b1a',
  'symfony/polyfill-php71' => '*@e0ea942129bf1d4f797d4473abeb6da9c1063b1a',
  'symfony/polyfill-php70' => '*@e0ea942129bf1d4f797d4473abeb6da9c1063b1a',
  'symfony/polyfill-php56' => '*@e0ea942129bf1d4f797d4473abeb6da9c1063b1a',
  '__root__' => 'dev-master@e0ea942129bf1d4f797d4473abeb6da9c1063b1a',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
