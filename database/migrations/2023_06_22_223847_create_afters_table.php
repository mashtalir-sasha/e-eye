<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAftersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afters', function (Blueprint $table) {
            $table->id();

            $table->text('text1');
            $table->text('text1EN')->nullable();

            $table->text('text2');
            $table->text('text2EN')->nullable();

            $table->text('link');
            $table->text('linkEN')->nullable();

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
        Schema::dropIfExists('afters');
    }
}
