<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisteredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registereds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uid');
            $table->string('uname');
            $table->string('email');
            $table->string('cid');
            $table->string('cname');
            $table->string('total');
            $table->string('status')->default(false);
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
        Schema::dropIfExists('registereds');
    }
}
