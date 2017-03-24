<?php

    namespace Martin\Redirect\Updates;

    use Schema;
    use October\Rain\Database\Updates\Migration;

    class CreateTable extends Migration {

        public function up() {

            Schema::create('martin_redirect_records', function($table) {
                $table->engine = 'InnoDB';
                $table->increments('id')->unsigned();
                $table->string('type',  50)->unique();
                $table->string('from', 200)->unique();
                $table->string('to'  , 200);
                $table->boolean('active')->default(1);
                $table->timestamps();
            });

        }

        public function down() {
            Schema::dropIfExists('martin_redirect_records');
        }

    }

?>