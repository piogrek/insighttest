<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "type",
        "text",
        "title",
        "files",
        "upload",
        "blocks",
        "user",
        "display_as_bot",
        "ts",
        "client_msg_id",
        "thread_ts",
        "reply_count",
        "reply_users_count",
        "latest_reply",
        "reply_users",
        "replies",
        "subscribed",
        "source_team",
        "user_profile",
        "user_team",
        "team",
        "attachments",
    ];

    protected $casts = [
        "ts" => "datetime",
        "thread_ts" => "datetime",
        "latest_reply" => "datetime",
        'files' => 'array',
        'attachments' => 'array',

    ];

}
