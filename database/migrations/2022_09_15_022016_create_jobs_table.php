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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->unsignedBigInteger('companies_id');
            $table->unsignedBigInteger('categories_id');
            $table->string('type'); // Full-time - Part-time - Remote - Contract - Season
            $table->string('schedule'); // Monday to Friday - Monday to Saturday - Saturday Sunday - Sunday - Night shift
            $table->integer('salary');
            $table->string('time'); // hour - day - week - month - year

            $table->foreign('companies_id')->references('id')->on('companies')->onDelete('restrict');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('restrict');
            
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
        Schema::dropIfExists('jobs');
    }
};