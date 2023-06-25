<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();

            $table->text('item1');
            $table->text('item1EN')->nullable();

            $table->text('item2');
            $table->text('item2EN')->nullable();

            $table->text('item3');
            $table->text('item3EN')->nullable();

            $table->text('item4');
            $table->text('item4EN')->nullable();

            $table->text('item5');
            $table->text('item5EN')->nullable();
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
        Schema::dropIfExists('benefits');
    }
}
