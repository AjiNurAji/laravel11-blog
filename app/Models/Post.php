<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Aji Nur Aji',
                'body' => 'Lorem ipsum dolor, sit amet consectetur
                adipisicing elit. Unde, beatae deserunt corrupti quaerat praesentium culpa labore natus repellendus
                id cumque dignissimos, numquam veniam perferendis officia ab? Tempora voluptatem necessitatibus
                suscipit?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Tia Niandari',
                'body' => 'Lorem ipsum dolor, sit amet consectetur
                adipisicing elit. Unde, beatae deserunt corrupti quaerat praesentium culpa labore natus repellendus
                id cumque dignissimos, numquam veniam perferendis officia ab? Tempora voluptatem necessitatibus
                suscipit?'
            ],
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) abort(404);

        return $post;
    }
}