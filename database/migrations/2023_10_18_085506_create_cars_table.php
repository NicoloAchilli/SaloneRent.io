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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('plate', 7)->unique();
            $table->string('brand',  32);
            $table->string('model', 32);
            $table->enum('number_of_seats', ['2', '4', '5', 'unknown'])->default('unknown');
            $table->enum('number_of_doors', ['2', '3', '4', '5', 'unknown'])->default('unknown');
            $table->enum('transmission', ['manual', 'automatic', 'unknown'])->default('unknown');
            $table->enum('fuel', ['diesel', 'gasoline', 'GPL', 'methane', 'hybrid', 'unknown'])->default('unknown');
            $table->string('image_path', 128)->nullable();
            $table->timestamps();
            $table->timestamp('removed_at')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
