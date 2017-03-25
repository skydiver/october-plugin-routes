<?php

    namespace Martin\Routes\Models;

    use Model;

    class Route extends Model {

        use \October\Rain\Database\Traits\Validation;

        public $table = 'martin_routes_records';

        public $rules = [
            'type'   => 'required',
            'source' => 'required',
            'target' => 'required|route_content',
        ];

        public $customMessages = [
            'route_content' => 'The :attribute file doesn\'t exist.',
        ];

    }

?>