<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("text");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("subdivision_id");
            $table->unsignedBigInteger("category_id") -> default(0);
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on('users');
            $table->foreign("subdivision_id")->references("id")->on('subdivision');
            $table->foreign("category_id")->references("id")->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
