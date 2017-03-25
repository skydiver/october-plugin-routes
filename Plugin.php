<?php

    namespace Martin\Redirect;

    use Backend;
    use System\Classes\PluginBase;
    use System\Classes\SettingsManager;

    class Plugin extends PluginBase {

        public function pluginDetails() {
            return [
                'name'        => 'martin.redirect::lang.plugin.name',
                'description' => 'martin.redirect::lang.plugin.description',
                'author'      => 'Martin M.',
                'icon'        => 'icon-plane',
                'homepage'    => 'https://github.com/skydiver/'
            ];
        }

//         public function registerNavigation() {
//             return [
//                 'redirect' => [
//                     'label'       => 'martin.redirect::lang.navigation.label',
//                     'url'         => Backend::url('martin/redirect/redirects'),
//                     'permissions' => ['martin.redirect.access_redirect'],
//                     'icon'        => 'icon-plane',
//                     //'iconSvg'     => 'plugins/martin/redirect/assets/imgs/icon.svg',
//                     'order'       => 500,
//                     'sideMenu' => [
//                         'redirects' => [
//                             'label' => 'martin.redirect::lang.navigation.sideMenu.redirects',
//                             'icon'  => 'icon-list',
//                             'url'         => Backend::url('martin/redirect/redirects'),
//                         ],
//                     ]
//                 ]
//             ];
//         }

        public function registerSettings() {
            return [
                'settings' => [
                    'label'       => 'martin.redirect::lang.navigation.label',
                    'description' => 'martin.redirect::lang.navigation.description',
                    'category'    => SettingsManager::CATEGORY_CMS,
                    'icon'        => 'icon-bolt',
                    'url'         => Backend::url('martin/redirect/redirects'),
                    'permissions' => ['martin.forms.access_settings'],
                    'order'       => 500
                ]
            ];
        }

    }

?>