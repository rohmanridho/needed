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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('photo');
            $table->string('slug');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('industries_id');
            $table->text('description');
            $table->string('ceo');
            $table->integer('founded');
            $table->softDeletes();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('industries_id')->references('id')->on('industries')->onDelete('restrict');
            
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
        Schema::dropIfExists('companies');
    }
};