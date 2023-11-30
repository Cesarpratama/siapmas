<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('post_category', function (Blueprint $table) {
            $table->foreignId('post_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->primary(['post_id', 'category_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('post_category');
    }
};
