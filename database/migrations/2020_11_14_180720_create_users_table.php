<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('surname');
            $table->string('email');
            $table->string('password');
            $table->longText('profile_img')->nullable($value = true);
            $table->string('address');
            $table->date('birthdate');
            $table->string('phone_number');
            //$table->foreign('organization_id')->references('id')->on('organizations')->nullable($value = true);           
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
        Schema::dropIfExists('users');
    }
}
