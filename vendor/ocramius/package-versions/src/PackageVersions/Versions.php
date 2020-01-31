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
  'egulias/email-validator' => '2.1.15@e834eea5306d85d67de5a05db5882911d5b29357',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'ocramius/package-versions' => '1.4.2@44af6f3a2e2e04f2af46bcb302ad9600cba41c7d',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'sensio/framework-extra-bundle' => 'v5.5.3@98f0807137b13d0acfdf3c255a731516e97015de',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
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
  'symfony/form' => 'v5.0.3@c96f80b3c81b17f72b846f05ab24771596d46938',
  'symfony/framework-bundle' => 'v5.0.3@cc59bc797b77c6ecccd6c87d9052f6b3eb6a8d63',
  'symfony/google-mailer' => 'v5.0.3@e58364b57725dcd14fb6a7119e75d90af4efdfc8',
  'symfony/http-foundation' => 'v5.0.3@5dc0db5026f2b611cb8910a1f465e95eafd84c2e',
  'symfony/http-kernel' => 'v5.0.3@9e31e5e11cbe038cbb853beb3e3bb6e4f2500259',
  'symfony/inflector' => 'v5.0.3@e375603b6bd12e8e3aec3fc1b640ac18a4ef4cb2',
  'symfony/intl' => 'v5.0.3@2b3694976f02ed6a7894d8a772c9d55cee5d9677',
  'symfony/mailer' => 'v5.0.3@9410890bfe9b8700312b4e04ac38819b66e3b907',
  'symfony/maker-bundle' => 'v1.14.3@c864e7f9b8d1e1f5f60acc3beda11299f637aded',
  'symfony/mime' => 'v5.0.3@2a3c7fee1f1a0961fa9cf360d5da553d05095e59',
  'symfony/options-resolver' => 'v5.0.3@b1ab86ce52b0c0abe031367a173005a025e30e04',
  'symfony/orm-pack' => 'v1.0.7@c57f5e05232ca40626eb9fa52a32bc8565e9231c',
  'symfony/polyfill-intl-icu' => 'v1.13.1@b3dffd68afa61ca70f2327f2dd9bbeb6aa53d70b',
  'symfony/polyfill-intl-idn' => 'v1.13.1@6f9c239e61e1b0c9229a28ff89a812dc449c3d46',
  'symfony/polyfill-mbstring' => 'v1.13.1@7b4aab9743c30be783b73de055d24a39cf4b954f',
  'symfony/polyfill-php73' => 'v1.13.1@4b0e2222c55a25b4541305a053013d5647d3a25f',
  'symfony/property-access' => 'v5.0.3@18617a8c26b97a262f816c78765eb3cd91630e19',
  'symfony/routing' => 'v5.0.3@7da33371d8ecfed6c9d93d87c73749661606f803',
  'symfony/security-bundle' => 'v5.0.3@786901b609390aec91846b2c4831a76bf32aaa2f',
  'symfony/security-core' => 'v5.0.3@13ac1d249f670e3b8e0ca59e87e95d2449204bb7',
  'symfony/security-csrf' => 'v5.0.3@65066f7e0f6e38a8c5507c706e86e7a52fd7ff3e',
  'symfony/security-guard' => 'v5.0.3@5813e1b39d8a1dd46f0b96e6ebe4dd4518d0b302',
  'symfony/security-http' => 'v5.0.3@19ba77a92010f27bc3229439f744f52e03c900a0',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v5.0.3@5d9add8034135b9a5f7b101d1e42c797e7f053e4',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/twig-bridge' => 'v5.0.3@39cc296147e010af3c13d7734a21528426bd46ff',
  'symfony/twig-bundle' => 'v5.0.3@1bd6192a7742d7807b9ecd0eff347ea549a19390',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v5.0.3@bad9814bf042b01b326c77cbb7740a03e5667ccf',
  'symfony/var-dumper' => 'v5.0.3@ccb1be566ae15f790020f917f06d1da0b04fe47b',
  'symfony/var-exporter' => 'v5.0.3@960f9ac0fdbd642461ed29d7717aeb2a94d428b9',
  'symfony/webpack-encore-bundle' => 'v1.7.2@787c2fdedde57788013339f05719c82ce07b6058',
  'symfony/yaml' => 'v5.0.3@69b44e3b8f90949aee2eb3aa9b86ceeb01cbf62a',
  'tattali/calendar-bundle' => 'v1.1.8@c2310a9509a105cb6046acd78c388a68fdbdafba',
  'twig/extra-bundle' => 'v3.0.1@ce5c97dd566d9acd5d1fbd5eb76b6d264614725a',
  'twig/twig' => 'v3.0.1@28f856a4c57eeb24485916e8a68403f41a133616',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'paragonie/random_compat' => '2.*@8c376873243f012eafaaa0580403653bacc3b1a6',
  'symfony/polyfill-ctype' => '*@8c376873243f012eafaaa0580403653bacc3b1a6',
  'symfony/polyfill-iconv' => '*@8c376873243f012eafaaa0580403653bacc3b1a6',
  'symfony/polyfill-php72' => '*@8c376873243f012eafaaa0580403653bacc3b1a6',
  'symfony/polyfill-php71' => '*@8c376873243f012eafaaa0580403653bacc3b1a6',
  'symfony/polyfill-php70' => '*@8c376873243f012eafaaa0580403653bacc3b1a6',
  'symfony/polyfill-php56' => '*@8c376873243f012eafaaa0580403653bacc3b1a6',
  '__root__' => 'dev-dev!@8c376873243f012eafaaa0580403653bacc3b1a6',
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
