<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Cast\Object_;

class NewsSeeder extends Seeder
{
    static function getSafeBoolFromJson($json, $key, $default = null): bool|null
    {
        if (isset($json[$key])) {
            return $json[$key] === "true";
        }
        return $default;
    }
    static function getSafeStringFromJson($json, $key, $default = null): string|null
    {
        if (isset($json[$key])) {
            return $json[$key];
        }
        return $default;
    }
    static function getSafeIntFromJson($json, $key, $default = null): int|null
    {
        if (isset($json[$key])) {
            return intval($json[$key]);
        }
        return $default;
    }

    static function getSafeObjectFromJson($json, $key, $default = []): mixed
    {
        if (isset($json[$key])) {
            return $json[$key];
        }
        return $default;
    }
    static function getSafeTsFromJson($json, $key, $default = null): string|null
    {
        if (isset($json[$key])) {
            $dt  = new DateTime();
            $dt->setTimestamp(intval($json[$key]));
            return $dt->format("Y-m-d H:i:s");
        }
        return $default;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // load json from file make sure it can handle very big files
        $json = file_get_contents(storage_path('2020-01-02.json'));
        $data = json_decode($json, true);
        foreach ($data as $item) {
            \App\Models\News::create([
                "type" => self::getSafeStringFromJson($item, "type"),
                "text" => self::getSafeStringFromJson($item, "text"),
                "files" => self::getSafeObjectFromJson($item, "files"),
                "ts" => self::getSafeTsFromJson($item, "ts"),
                "attachments" => self::getSafeObjectFromJson($item, "attachments"),
            ]);
        }

        // \App\Models\News::factory()->create([
        //     'text' => 'Test User',
        //     'type' => 'message',
        // ]);
    }
}
