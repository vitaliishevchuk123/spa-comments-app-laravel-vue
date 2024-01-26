<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $parentComments = Comment::factory(100)->create();
        $users = User::all();

        foreach($parentComments as $comment) {
            $number = rand(1,5);
            foreach($users->random($number) as $user) {
                $childComment = Comment::factory([
                    'user_id' => $user->id,
                    'parent_id' => $comment->id,
                ])->create();
                if ($childComment->id % 2 === 0) {
                    Comment::factory([
                        'user_id' => $comment->user_id,
                        'parent_id' => $childComment->id,
                    ])->create();
                }
            }
        }
    }
}
