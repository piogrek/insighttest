<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string("type")->nullable();
            $table->longText("text")->nullable();
            $table->integer("reply_count")->default(0);
            $table->integer("reply_user_count")->default(0);
            $table->json("files")->nullable();
            $table->boolean("upload")->nullable();
            $table->json("blocks")->nullable();
            $table->string("user")->nullable();
            $table->boolean("display_as_bot")->nullable();
            $table->dateTime("ts")->nullable();
            $table->string("client_msg_id")->nullable();
            $table->dateTime("thread_ts")->nullable();
            $table->string("reply_users_count")->nullable();
            $table->dateTime("latest_reply")->nullable();
            $table->json("reply_users")->nullable();
            $table->json("replies")->nullable();
            $table->string("subscribed")->nullable();
            $table->string("source_team")->nullable();
            $table->json("user_profile")->nullable();
            $table->string("user_team")->nullable();
            $table->string("team")->nullable();
            $table->json("attachments")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
