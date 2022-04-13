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
        Schema::create('profile', function (Blueprint $table) {
            $table->id("user_id"); //"user_id" will be the table coli=umn customized name
            $table->string("name",50);
            $table->string("password");
            $table->enum("gender", ["male","female","other"])->nullable();
            $table->boolean("status")->default(1);
            $table->timestamps();
        });
        // php artisan make:migration add_columns_to_users_table
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
};
