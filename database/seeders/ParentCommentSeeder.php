<?php

namespace Database\Seeders;
use App\Models\ParentComment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParentCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $parent = new ParentComment();
        $parent->user_id = 2;
        $parent->post_id = 4;
        $parent->parent_comment = "And why do you think that?";
        $parent->save();

        ParentComment::factory()->count(50)->create();
    }
}
