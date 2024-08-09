<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Automattic\\Jetpack\\Assets' => $baseDir . '/jetpack_vendor/automattic/jetpack-assets/src/class-assets.php',
    'Automattic\\Jetpack\\Assets\\Semver' => $baseDir . '/jetpack_vendor/automattic/jetpack-assets/src/class-semver.php',
    'Automattic\\Jetpack\\Composer\\Manager' => $vendorDir . '/automattic/jetpack-composer-plugin/src/class-manager.php',
    'Automattic\\Jetpack\\Composer\\Plugin' => $vendorDir . '/automattic/jetpack-composer-plugin/src/class-plugin.php',
    'Automattic\\Jetpack\\Constants' => $baseDir . '/jetpack_vendor/automattic/jetpack-constants/src/class-constants.php',
    'Automattic\\Jetpack\\Script_Data' => $baseDir . '/jetpack_vendor/automattic/jetpack-assets/src/class-script-data.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'QuadLayers\\IGG\\Api\\Fetch\\Business\\Access_Token\\Refresh' => $baseDir . '/lib/api/fetch/business/access-token/class-refresh.php',
    'QuadLayers\\IGG\\Api\\Fetch\\Business\\Base' => $baseDir . '/lib/api/fetch/business/class-base.php',
    'QuadLayers\\IGG\\Api\\Fetch\\Business\\Hashtag_Id\\Get' => $baseDir . '/lib/api/fetch/business/hashtag-id/class-get.php',
    'QuadLayers\\IGG\\Api\\Fetch\\Business\\Hashtag_Media\\Get' => $baseDir . '/lib/api/fetch/business/hashtag-media/class-get.php',
    'QuadLayers\\IGG\\Api\\Fetch\\Business\\User_Media\\Get' => $baseDir . '/lib/api/fetch/business/user-media/class-get.php',
    'QuadLayers\\IGG\\Api\\Fetch\\Business\\User_Profile\\Get' => $baseDir . '/lib/api/fetch/business/user-profile/class-get.php',
    'QuadLayers\\IGG\\Api\\Fetch\\Fetch' => $baseDir . '/lib/api/fetch/interface-fetch.php',
    'QuadLayers\\IGG\\Api\\Fetch\\Personal\\Access_Token\\Refresh' => $baseDir . '/lib/api/fetch/personal/access-token/class-refresh.php',
    'QuadLayers\\IGG\\Api\\Fetch\\Personal\\Base' => $baseDir . '/lib/api/fetch/personal/class-base.php',
    'QuadLayers\\IGG\\Api\\Fetch\\Personal\\User_Media\\Get' => $baseDir . '/lib/api/fetch/personal/user-media/class-get.php',
    'QuadLayers\\IGG\\Api\\Fetch\\Personal\\User_Profile\\Get' => $baseDir . '/lib/api/fetch/personal/user-profile/class-get.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Accounts\\Create' => $baseDir . '/lib/api/rest/endpoints/backend/accounts/class-create.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Accounts\\Delete' => $baseDir . '/lib/api/rest/endpoints/backend/accounts/class-delete.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Accounts\\Get' => $baseDir . '/lib/api/rest/endpoints/backend/accounts/class-get.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Base' => $baseDir . '/lib/api/rest/endpoints/backend/class-base.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Feeds\\Clear_Cache' => $baseDir . '/lib/api/rest/endpoints/backend/feeds/class-clear-cache.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Feeds\\Create' => $baseDir . '/lib/api/rest/endpoints/backend/feeds/class-create.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Feeds\\Delete' => $baseDir . '/lib/api/rest/endpoints/backend/feeds/class-delete.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Feeds\\Edit' => $baseDir . '/lib/api/rest/endpoints/backend/feeds/class-edit.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Feeds\\Get' => $baseDir . '/lib/api/rest/endpoints/backend/feeds/class-get.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Settings\\Get' => $baseDir . '/lib/api/rest/endpoints/backend/settings/class-get.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Backend\\Settings\\Save' => $baseDir . '/lib/api/rest/endpoints/backend/settings/class-save.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Base' => $baseDir . '/lib/api/rest/endpoints/class-base.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Frontend\\Hashtag_Media' => $baseDir . '/lib/api/rest/endpoints/frontend/class-hashtag-media.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Frontend\\User_Media' => $baseDir . '/lib/api/rest/endpoints/frontend/class-user-media.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Frontend\\User_Profile' => $baseDir . '/lib/api/rest/endpoints/frontend/class-user-profile.php',
    'QuadLayers\\IGG\\Api\\Rest\\Endpoints\\Route' => $baseDir . '/lib/api/rest/endpoints/interface-route.php',
    'QuadLayers\\IGG\\Api\\Rest\\Routes_Library' => $baseDir . '/lib/api/rest/class-routes-library.php',
    'QuadLayers\\IGG\\Controllers\\Backend' => $baseDir . '/lib/controllers/class-backend.php',
    'QuadLayers\\IGG\\Controllers\\Frontend' => $baseDir . '/lib/controllers/class-frontend.php',
    'QuadLayers\\IGG\\Controllers\\Gutenberg' => $baseDir . '/lib/controllers/class-gutenberg.php',
    'QuadLayers\\IGG\\Entity\\Account' => $baseDir . '/lib/entity/class-account.php',
    'QuadLayers\\IGG\\Entity\\Feed' => $baseDir . '/lib/entity/class-feed.php',
    'QuadLayers\\IGG\\Entity\\Settings' => $baseDir . '/lib/entity/class-settings.php',
    'QuadLayers\\IGG\\Helpers' => $baseDir . '/lib/class-helpers.php',
    'QuadLayers\\IGG\\Models\\Accounts' => $baseDir . '/lib/models/class-accounts.php',
    'QuadLayers\\IGG\\Models\\Feeds' => $baseDir . '/lib/models/class-feeds.php',
    'QuadLayers\\IGG\\Models\\Setting' => $baseDir . '/lib/models/class-setting.php',
    'QuadLayers\\IGG\\Plugin' => $baseDir . '/lib/class-plugin.php',
    'QuadLayers\\IGG\\Services\\Accounts' => $baseDir . '/lib/services/class-accounts.php',
    'QuadLayers\\IGG\\Utils\\Cache' => $baseDir . '/lib/utils/class-cache.php',
    'QuadLayers\\WP_Dashboard_Widget_News\\Load' => $baseDir . '/jetpack_vendor/quadlayers/wp-dashboard-widget-news/src/Load.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\Load' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Load.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\PluginByFile' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginByFile.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlug' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlug.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlugV2' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlugV2.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActions' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActions.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActionsLinks' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActionsLinks.php',
    'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginDataByFile' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginDataByFile.php',
    'QuadLayers\\WP_Notice_Plugin_Required\\Load' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Load.php',
    'QuadLayers\\WP_Notice_Plugin_Required\\Plugin' => $baseDir . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Plugin.php',
    'QuadLayers\\WP_Orm\\Builder\\CollectionRepositoryBuilder' => $vendorDir . '/franmastromarino/wp-orm/src/Builder/CollectionRepositoryBuilder.php',
    'QuadLayers\\WP_Orm\\Builder\\SingleRepositoryBuilder' => $vendorDir . '/franmastromarino/wp-orm/src/Builder/SingleRepositoryBuilder.php',
    'QuadLayers\\WP_Orm\\Entity\\CollectionEntity' => $vendorDir . '/franmastromarino/wp-orm/src/Entity/CollectionEntity.php',
    'QuadLayers\\WP_Orm\\Entity\\EntityInterface' => $vendorDir . '/franmastromarino/wp-orm/src/Entity/EntityInterface.php',
    'QuadLayers\\WP_Orm\\Entity\\SingleEntity' => $vendorDir . '/franmastromarino/wp-orm/src/Entity/SingleEntity.php',
    'QuadLayers\\WP_Orm\\Factory\\AbstractFactory' => $vendorDir . '/franmastromarino/wp-orm/src/Factory/AbstractFactory.php',
    'QuadLayers\\WP_Orm\\Factory\\CollectionFactory' => $vendorDir . '/franmastromarino/wp-orm/src/Factory/CollectionFactory.php',
    'QuadLayers\\WP_Orm\\Factory\\SingleFactory' => $vendorDir . '/franmastromarino/wp-orm/src/Factory/SingleFactory.php',
    'QuadLayers\\WP_Orm\\Mapper\\CollectionMapper' => $vendorDir . '/franmastromarino/wp-orm/src/Mapper/CollectionMapper.php',
    'QuadLayers\\WP_Orm\\Mapper\\CollectionMapperInterface' => $vendorDir . '/franmastromarino/wp-orm/src/Mapper/CollectionMapperInterface.php',
    'QuadLayers\\WP_Orm\\Mapper\\SingleMapper' => $vendorDir . '/franmastromarino/wp-orm/src/Mapper/SingleMapper.php',
    'QuadLayers\\WP_Orm\\Mapper\\SingleMapperInterface' => $vendorDir . '/franmastromarino/wp-orm/src/Mapper/SingleMapperInterface.php',
    'QuadLayers\\WP_Orm\\Repository\\CollectionRepository' => $vendorDir . '/franmastromarino/wp-orm/src/Repository/CollectionRepository.php',
    'QuadLayers\\WP_Orm\\Repository\\CollectionRepositoryInterface' => $vendorDir . '/franmastromarino/wp-orm/src/Repository/CollectionRepositoryInterface.php',
    'QuadLayers\\WP_Orm\\Repository\\SingleRepository' => $vendorDir . '/franmastromarino/wp-orm/src/Repository/SingleRepository.php',
    'QuadLayers\\WP_Orm\\Repository\\SingleRepositoryInterface' => $vendorDir . '/franmastromarino/wp-orm/src/Repository/SingleRepositoryInterface.php',
    'QuadLayers\\WP_Plugin_Install_Tab\\Load' => $baseDir . '/jetpack_vendor/quadlayers/wp-plugin-install-tab/src/Load.php',
    'QuadLayers\\WP_Plugin_Suggestions\\Load' => $baseDir . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Load.php',
    'QuadLayers\\WP_Plugin_Suggestions\\Page' => $baseDir . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Page.php',
    'QuadLayers\\WP_Plugin_Suggestions\\Table' => $baseDir . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Table.php',
    'QuadLayers\\WP_Plugin_Table_Links\\Load' => $baseDir . '/jetpack_vendor/quadlayers/wp-plugin-table-links/src/Load.php',
);
