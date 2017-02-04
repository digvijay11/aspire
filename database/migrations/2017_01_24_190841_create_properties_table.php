<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string("address_1",100);
            $table->string("address_2",100);
            $table->string("city",100);
            $table->char("postal_code",8);
            $table->string("county",100);
            $table->string("country",100);
            $table->decimal('latitude',8,6);
            $table->decimal('longitude',9,6);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('properties');
    }
}
