<?php

    namespace Martin\Routes;

    use Backend;
    use System\Classes\PluginBase;
    use System\Classes\SettingsManager;

    class Plugin extends PluginBase {

        public function pluginDetails() {
            return [
                'name'        => 'martin.routes::lang.plugin.name',
                'description' => 'martin.routes::lang.plugin.description',
                'author'      => 'Martin M.',
                'icon'        => 'icon-plane',
                'homepage'    => 'https://github.com/skydiver/'
            ];
        }

        public function registerSettings() {
            return [
                'settings' => [
                    'label'       => 'martin.routes::lang.navigation.label',
                    'description' => 'martin.routes::lang.navigation.description',
                    'category'    => SettingsManager::CATEGORY_CMS,
                    'icon'        => 'icon-plane',
                    'url'         => Backend::url('martin/routes/routes'),
                    'permissions' => ['martin.forms.access_settings'],
                    'order'       => 500
                ]
            ];
        }

    }

?>