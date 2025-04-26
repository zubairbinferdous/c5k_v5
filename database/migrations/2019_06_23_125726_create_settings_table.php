<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 250)->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->text('logo_path')->nullable();
            $table->text('favicon_path')->nullable();
            $table->string('phone_one')->nullable();
            $table->string('phone_two')->nullable();
            $table->string('email_one', 250)->nullable();
            $table->string('email_two', 250)->nullable();
            $table->text('contact_address')->nullable();
            $table->string('contact_mail', 250)->nullable();
            $table->text('footer_text')->nullable();
            $table->integer('status')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
