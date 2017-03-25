<?php

    namespace Martin\Redirect\Controllers;

    use BackendMenu;
    use Backend\Classes\Controller;
    use System\Classes\SettingsManager;

    class Redirects extends Controller {

        public $implement = [
            'Backend\Behaviors\ListController',
            'Backend\Behaviors\FormController',
        ];

        public $listConfig    = 'config_list.yaml';
        public $formConfig    = 'config_form.yaml';

        public function __construct() {
            parent::__construct();
            //BackendMenu::setContext('Martin.Redirect', 'redirect', 'redirects');
            BackendMenu::setContext('October.System', 'system', 'settings');
            SettingsManager::setContext('Martin.Redirect', 'settings');
        }

    }

?>