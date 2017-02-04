<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile1',20);
            $table->string('mobile2',20);
            $table->date('birth_date');
            $table->text('address_1');
            $table->text('address_2');
            $table->text('address_3');
            $table->text('notes');
            $table->char('type',20);
            $table->bigInteger('managed_by')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('customers');
    }
}
