<?php

    namespace Martin\Routes\Updates;

    use Schema;
    use October\Rain\Database\Updates\Migration;

    class ContentTypeField extends Migration {

        public function up() {
            Schema::table('martin_routes_records', function ($table) {
                $table->string('content_type', 80)->nullable()->after('target');
            });
        }

        public function down() {
            if(Schema::hasColumn('martin_routes_records', 'content_type')) {
                Schema::table('martin_routes_records', function ($table) {
                    $table->dropColumn('content_type');
                });
            }
        }

    }

?>