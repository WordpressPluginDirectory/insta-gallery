<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74b9f45daec271d48236a833cf56b3b7
{
    public static $files = array (
        '3773ef3f09c37da5478d578e32b03a4b' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/actions.php',
        '017bc83cfc52756fc7b94c9b354c1ba0' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'QuadLayers\\WP_Plugin_Table_Links\\' => 33,
            'QuadLayers\\WP_Plugin_Suggestions\\' => 33,
            'QuadLayers\\WP_Plugin_Install_Tab\\' => 33,
            'QuadLayers\\WP_Orm\\' => 18,
            'QuadLayers\\WP_Notice_Plugin_Required\\' => 37,
            'QuadLayers\\WP_Notice_Plugin_Promote\\' => 36,
            'QuadLayers\\WP_Dashboard_Widget_News\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'QuadLayers\\WP_Plugin_Table_Links\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-table-links/src',
        ),
        'QuadLayers\\WP_Plugin_Suggestions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src',
        ),
        'QuadLayers\\WP_Plugin_Install_Tab\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-install-tab/src',
        ),
        'QuadLayers\\WP_Orm\\' => 
        array (
            0 => __DIR__ . '/..' . '/franmastromarino/wp-orm/src',
        ),
        'QuadLayers\\WP_Notice_Plugin_Required\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src',
        ),
        'QuadLayers\\WP_Notice_Plugin_Promote\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src',
        ),
        'QuadLayers\\WP_Dashboard_Widget_News\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-dashboard-widget-news/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Assets' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-assets.php',
        'Automattic\\Jetpack\\Assets\\Script_Data' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-script-data.php',
        'Automattic\\Jetpack\\Assets\\Semver' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-semver.php',
        'Automattic\\Jetpack\\Composer\\Manager' => __DIR__ . '/..' . '/automattic/jetpack-composer-plugin/src/class-manager.php',
        'Automattic\\Jetpack\\Composer\\Plugin' => __DIR__ . '/..' . '/automattic/jetpack-composer-plugin/src/class-plugin.php',
        'Automattic\\Jetpack\\Constants' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-constants/src/class-constants.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'QuadLayers\\IGG\\Api\\Fetch\\Business\\Access_Token\\Refresh' => __DIR__ . '/../..' . '/lib/api/fetch/business/access-token/class-refresh.php',
        'QuadLayers\\IGG\\Api\\Fetch\\Business\\Base' => __DIR__ . '/../..' . '/lib/api/fetch/business/class-base.php',
        'QuadLayers\\IGG\\Api\\Fetch\\Business\\Hashtag_Id\\Get' => __DIR__ . '/../..' . '/lib/api/fetch/business/hashtag-id/class-get.php',
        'QuadLayers\\IGG\\Api\\Fetch\\Business\\Hashtag_Media\\Get' => __DIR__ . '/../..' . '/lib/api/fetch/business/hashtag-media/class-get.php',
        'QuadLayers\\IGG\\Api\\Fetch\\Business\\User_Media\\Get' => __DIR__ . '/../..' . '/lib/api/fetch/business/user-media/class-get.php',
        'QuadLayers\\IGG\\Api\\Fetch\\Business\\User_Profile\\Get' => __DIR__ . '/../..' . '/lib/api/fetch/business/user-profile/class-get.php',
        'QuadLayers\\IGG\\Api\\Fetch\\Fetch' => __DIR__ . '/../..' . '/lib/api/fetch/interface-fetch.php',
        'QuadLayers\\IGG\\Api\\Fetch\\Personal\\Access_Token\\Refresh' => __DIR__ . '/../..' . '/lib/api/fetch/personal/access-token/class-refresh.php',
        'QuadLayers\\IGG\\Api\\Fetch\\Personal\\Base' => __DIR__ . '/../..' . '/lib/api/fetch/personal/class-base.php',
        'QuadLayers\\IGG\\Api\\Fetch\\Personal\\User_Media\\Get' => __DIR__ . '/../..' . '/lib/api/fetch/personal/user-media/class-get.php',
        'QuadLayers\\IGG\\Api\\Fetch\\Personal\\User_Profile\\Get' => __DIR__ . '/../..' . '/lib/api/fetch/personal/user-profile/class-get.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Accounts\\Create' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/backend/accounts/class-create.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Accounts\\Delete' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/backend/accounts/class-delete.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Accounts\\Get' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/backend/accounts/class-get.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Base' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/backend/class-base.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Feeds\\Clear_Cache' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/backend/feeds/class-clear-cache.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Feeds\\Create' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/backend/feeds/class-create.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Feeds\\Delete' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/backend/feeds/class-delete.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Feeds\\Edit' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/backend/feeds/class-edit.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Feeds\\Get' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/backend/feeds/class-get.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Settings\\Get' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/backend/settings/class-get.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Settings\\Save' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/backend/settings/class-save.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Base' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/class-base.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Frontend\\Hashtag_Media' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/frontend/class-hashtag-media.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Frontend\\User_Media' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/frontend/class-user-media.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Frontend\\User_Profile' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/frontend/class-user-profile.php',
        'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Route' => __DIR__ . '/../..' . '/lib/api/rest/endpoints/interface-route.php',
        'QuadLayers\\IGG\\Api\\Rest\\Routes_Library' => __DIR__ . '/../..' . '/lib/api/rest/class-routes-library.php',
        'QuadLayers\\IGG\\Controllers\\Backend' => __DIR__ . '/../..' . '/lib/controllers/class-backend.php',
        'QuadLayers\\IGG\\Controllers\\Frontend' => __DIR__ . '/../..' . '/lib/controllers/class-frontend.php',
        'QuadLayers\\IGG\\Controllers\\Gutenberg' => __DIR__ . '/../..' . '/lib/controllers/class-gutenberg.php',
        'QuadLayers\\IGG\\Entity\\Account' => __DIR__ . '/../..' . '/lib/entity/class-account.php',
        'QuadLayers\\IGG\\Entity\\Feed' => __DIR__ . '/../..' . '/lib/entity/class-feed.php',
        'QuadLayers\\IGG\\Entity\\Setting' => __DIR__ . '/../..' . '/lib/entity/class-setting.php',
        'QuadLayers\\IGG\\Helpers' => __DIR__ . '/../..' . '/lib/class-helpers.php',
        'QuadLayers\\IGG\\Models\\Accounts' => __DIR__ . '/../..' . '/lib/models/class-accounts.php',
        'QuadLayers\\IGG\\Models\\Feeds' => __DIR__ . '/../..' . '/lib/models/class-feeds.php',
        'QuadLayers\\IGG\\Models\\Settings' => __DIR__ . '/../..' . '/lib/models/class-settings.php',
        'QuadLayers\\IGG\\Plugin' => __DIR__ . '/../..' . '/lib/class-plugin.php',
        'QuadLayers\\IGG\\Services\\Accounts' => __DIR__ . '/../..' . '/lib/services/class-accounts.php',
        'QuadLayers\\IGG\\Services\\Cache' => __DIR__ . '/../..' . '/lib/services/class-cache.php',
        'QuadLayers\\WP_Dashboard_Widget_News\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-dashboard-widget-news/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginByFile' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginByFile.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlug' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlug.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlugV2' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlugV2.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActions' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActions.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActionsLinks' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActionsLinks.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginDataByFile' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginDataByFile.php',
        'QuadLayers\\WP_Notice_Plugin_Required\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Required\\Plugin' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Plugin.php',
        'QuadLayers\\WP_Orm\\Builder\\CollectionRepositoryBuilder' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Builder/CollectionRepositoryBuilder.php',
        'QuadLayers\\WP_Orm\\Builder\\SingleRepositoryBuilder' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Builder/SingleRepositoryBuilder.php',
        'QuadLayers\\WP_Orm\\Builder\\SingleVirtualRepositoryBuilder' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Builder/SingleVirtualRepositoryBuilder.php',
        'QuadLayers\\WP_Orm\\Entity\\CollectionEntity' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Entity/CollectionEntity.php',
        'QuadLayers\\WP_Orm\\Entity\\EntityInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Entity/EntityInterface.php',
        'QuadLayers\\WP_Orm\\Entity\\SingleEntity' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Entity/SingleEntity.php',
        'QuadLayers\\WP_Orm\\Factory\\AbstractFactory' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Factory/AbstractFactory.php',
        'QuadLayers\\WP_Orm\\Factory\\CollectionFactory' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Factory/CollectionFactory.php',
        'QuadLayers\\WP_Orm\\Factory\\SingleFactory' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Factory/SingleFactory.php',
        'QuadLayers\\WP_Orm\\Mapper\\CollectionMapper' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Mapper/CollectionMapper.php',
        'QuadLayers\\WP_Orm\\Mapper\\CollectionMapperInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Mapper/CollectionMapperInterface.php',
        'QuadLayers\\WP_Orm\\Mapper\\SingleMapper' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Mapper/SingleMapper.php',
        'QuadLayers\\WP_Orm\\Mapper\\SingleMapperInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Mapper/SingleMapperInterface.php',
        'QuadLayers\\WP_Orm\\Repository\\CollectionRepository' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/CollectionRepository.php',
        'QuadLayers\\WP_Orm\\Repository\\CollectionRepositoryInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/CollectionRepositoryInterface.php',
        'QuadLayers\\WP_Orm\\Repository\\SingleRepository' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/SingleRepository.php',
        'QuadLayers\\WP_Orm\\Repository\\SingleRepositoryInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/SingleRepositoryInterface.php',
        'QuadLayers\\WP_Orm\\Repository\\SingleVirtualRepository' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/SingleVirtualRepository.php',
        'QuadLayers\\WP_Orm\\Repository\\SingleVirtualRepositoryInterface' => __DIR__ . '/..' . '/franmastromarino/wp-orm/src/Repository/SingleVirtualRepositoryInterface.php',
        'QuadLayers\\WP_Plugin_Install_Tab\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-install-tab/src/Load.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Load.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Page' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Page.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Table' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Table.php',
        'QuadLayers\\WP_Plugin_Table_Links\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-table-links/src/Load.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74b9f45daec271d48236a833cf56b3b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74b9f45daec271d48236a833cf56b3b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74b9f45daec271d48236a833cf56b3b7::$classMap;

        }, null, ClassLoader::class);
    }
}
