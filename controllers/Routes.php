<?php

    namespace Martin\Routes\Controllers;

    use BackendMenu;
    use Backend\Classes\Controller;
    use System\Classes\SettingsManager;

    class Routes extends Controller {

        public $implement = [
            'Backend\Behaviors\ListController',
            'Backend\Behaviors\FormController',
        ];

        public $listConfig    = 'config_list.yaml';
        public $formConfig    = 'config_form.yaml';

        public function __construct() {
            parent::__construct();
            BackendMenu::setContext('October.System', 'system', 'settings');
            SettingsManager::setContext('Martin.Routes', 'settings');
        }

    }

?>