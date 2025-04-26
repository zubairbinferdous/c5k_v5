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
        Schema::create('article_htmls', function (Blueprint $table) {
            $table->id();
            $table->integer('title_id');
            $table->text('image');
            $table->text('blog_article');
            $table->boolean('status')->default(1)->comment('1=active, 0=inactive');
            $table->string('published')->default('published');
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
        Schema::dropIfExists('article_htmls');
    }
};
