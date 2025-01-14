<?php

namespace Sdenizhan\Blog\Database\Migrations;



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->default(0);
            $table->text('title');
            $table->text('slug');
            $table->longText('content')->nullable();

            $table->enum('status', ['draft', 'published', 'timed'])->default('draft');
            $table->string('featured_image')->nullable();

            $table->json('meta')->nullable();
            $table->json('data')->nullable();

            $table->foreignId('created_by')->default(0);
            $table->foreign('category_id')->references('id')->on('blog_category')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
};
