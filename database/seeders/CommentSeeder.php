<?php

namespace Database\Seeders;
use App\Models\Comments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $comment = new Comments();
        $comment->user_id = 27;
        $comment->parent_id = 3;
        $comment->parent_comment = "here here!!!!";
        $comment->save();

        Comments::factory()->count(25)->create();
    }
}
