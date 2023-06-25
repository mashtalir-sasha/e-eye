<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->text('address');
            $table->text('addressEN')->nullable();

            $table->text('phone1')->nullable();
            $table->text('phone2')->nullable();
            $table->text('email')->nullable();

            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('youtube')->nullable();
            $table->text('twiter')->nullable();
            $table->text('tiktok')->nullable();
            
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
        Schema::dropIfExists('contacts');
    }
}
