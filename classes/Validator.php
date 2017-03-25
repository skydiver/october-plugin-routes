<?php

    namespace Martin\Routes\Classes;

    use File, Input;

    class Validator {

        public function validateRouteContent($attribute, $value, $parameters) {

            if(Input::get('Route')['type'] != 'content') { return true; }

            $file = base_path(Input::get('Route')['target']);

            if(File::exists($file)) {
                return true;
            }

            return false;

        }

    }

?>