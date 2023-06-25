<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogs', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('titleEN')->nullable();

            $table->text('text');
            $table->text('textEN')->nullable();

            $table->string('video')->nullable();

            $table->string('image')->nullable();
            $table->string('photo')->nullable();

            $table->text('list')->nullable();            
            $table->text('listEN')->nullable();            

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
        Schema::dropIfExists('catalogs');
    }
}
