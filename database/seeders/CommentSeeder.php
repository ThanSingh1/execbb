<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create(['post_id' => 1, 'content' => 'This is a comment for the first post.']);
        Comment::create(['post_id' => 1, 'content' => 'This is another comment for the first post.']);
        Comment::create(['post_id' => 2, 'content' => 'This is a comment for the second post.']);
    }
}