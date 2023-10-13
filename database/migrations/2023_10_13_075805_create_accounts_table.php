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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 32);
            $table->string('surname', 32);
            $table->string('username', 64)->unique();
            $table->string('password');
            $table->date('birth')->nullable();
            $table->string('email', 256)->nullable();
            $table->string('occupation', 64)->nullable();
            $table->string('residence', 64)->nullable();
            $table->timestamp('last_access')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->string('image_path', 128)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
