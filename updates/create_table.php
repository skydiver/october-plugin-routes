<?php

    namespace Martin\Routes\Updates;

    use Schema;
    use October\Rain\Database\Updates\Migration;

    class CreateTable extends Migration {

        public function up() {

            Schema::create('martin_routes_records', function($table) {
                $table->engine = 'InnoDB';
                $table->increments('id')->unsigned();
                $table->string('type'  ,  50)->index();
                $table->string('source', 200)->unique();
                $table->string('target', 200);
                $table->boolean('active')->default(1);
                $table->timestamps();
            });

        }

        public function down() {
            Schema::dropIfExists('martin_routes_records');
        }

    }

?>