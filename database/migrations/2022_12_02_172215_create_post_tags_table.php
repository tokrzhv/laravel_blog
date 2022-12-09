<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('tag_id');

            $table->timestamps();

            //idx
            $table->index('post_id', 'post_tag_posts_idx');
            $table->index('tag_id', 'post_tag_tags_idx');
            //fk
            $table->foreign('post_id', 'post_tag_posts_fk')->on('posts')->references('id');
            $table->foreign('tag_id', 'post_tag_tags_fk')->on('tags')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tags');
    }
}
