<?php 

    namespace Martin\Redirect\Models;

    use Model;

    class Redirect extends Model {

        use \October\Rain\Database\Traits\Validation;

        public $rules = [];
        public $table = 'martin_redirect_records';

    }

?>