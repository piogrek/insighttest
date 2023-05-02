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
        "files",
        "ts",
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
