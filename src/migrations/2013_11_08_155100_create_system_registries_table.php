<?php

use Illuminate\Database\Migrations\Migration;

class CreateSystemRegistriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_registries', function($table)
        {
            $table->string('key');
            $table->text('value');

            $table->primary('key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('system_registries');
    }

}