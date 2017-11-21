<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('adminid');
            $table->string('name',20);
            $table->string('email',30)->unique();
            $table->string('mobile',20);
            $table->integer('balance')->default(500000);
            $table->string('password');
            $table->rememberToken();
            $table->integer('regtime');
            $table->integer('lastlogin')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
