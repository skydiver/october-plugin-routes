<?php

    namespace Martin\Routes\Models;

    use Model;

    class Route extends Model {

        use \October\Rain\Database\Traits\Validation;

        public $rules = [];
        public $table = 'martin_routes_records';

    }

?>