<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_issues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('article_id')->unsigned();
            $table->bigInteger('writer_id')->unsigned()->nullable();
            $table->bigInteger('reviewer_id')->unsigned()->nullable();
            $table->string('title', 250)->nullable();
            $table->longText('description')->nullable();
            $table->date('issue_date')->nullable();
            $table->integer('status')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->foreign('article_id')
                  ->references('id')->on('articles')
                  ->onDelete('cascade');
            $table->foreign('writer_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->foreign('reviewer_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('article_issues');
    }
}
