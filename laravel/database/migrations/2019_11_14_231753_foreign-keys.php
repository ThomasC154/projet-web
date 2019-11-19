<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        Schema::table('articles', function (Blueprint $table) {
            $table->unsignedBigInteger('campus_id');
        
            $table->foreign('campus_id')->references('id')->on('campuses');
        });
        Schema::table('articles', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
        
            $table->foreign('category_id')->references('id')->on('categories');
        });
        Schema::table('cart_article', function (Blueprint $table) {
            $table->unsignedBigInteger('article_id');
        
            $table->foreign('article_id')->references('id')->on('articles');
        });
        Schema::table('cart_article', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
        
            $table->foreign('order_id')->references('id')->on('cart_article');
        });
        Schema::table('carts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
        
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
        
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('comment_photos', function (Blueprint $table) {
            $table->unsignedBigInteger('comment_id');
        
            $table->foreign('comment_id')->references('id')->on('comments'); 
        });
        Schema::table('comment_photos', function (Blueprint $table) {
            $table->unsignedBigInteger('photo_id');
        
            $table->foreign('photo_id')->references('id')->on('photos'); 
        });

        Schema::table('photos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
        
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('photos', function (Blueprint $table) {
            $table->unsignedBigInteger('event_id');
        
            $table->foreign('event_id')->references('id')->on('events');
        });
        Schema::table('user_photo', function (Blueprint $table) {
            $table->unsignedBigInteger('photo_id');
        
            $table->foreign('photo_id')->references('id')->on('photos');
        });
        Schema::table('user_photo', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
        
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('campus_id');
        
            $table->foreign('campus_id')->references('id')->on('campuses');
        });
        Schema::table('user_event', function (Blueprint $table) {
            $table->unsignedBigInteger('event_id');
        
            $table->foreign('event_id')->references('id')->on('events');
        });
        Schema::table('user_event', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
        
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('events', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
        
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('events', function (Blueprint $table) {
            $table->unsignedBigInteger('campus_id');
        
            $table->foreign('campus_id')->references('id')->on('campuses');
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('campus_id');
        });
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('user_event', function (Blueprint $table) {
            $table->dropColumn('event_id');
        });
        Schema::table('user_event', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('campus_id');
        });
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('campus_id');
        });
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('category_id');
        });
        Schema::table('cart_article', function (Blueprint $table) {
            $table->dropColumn('order_id');
        });
        Schema::table('cart_article', function (Blueprint $table) {
            $table->dropColumn('article_id');
        });
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('comment_photos', function (Blueprint $table) {
            $table->dropColumn('comment_id');
        });
        Schema::table('comment_photos', function (Blueprint $table) {
            $table->dropColumn('photo_id');
        });
        Schema::table('photos', function (Blueprint $table) {
            $table->dropColumn('event_id');
        });
        Schema::table('photos', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('user_photo', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('user_photo', function (Blueprint $table) {
            $table->dropColumn('photo_id');
        });
    }
}
