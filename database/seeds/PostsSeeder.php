<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            
            'title'=>"clanok 1",
            'text'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum dapibus quam. Nullam consequat viverra sapien nec semper. Duis efficitur blandit bibendum. Nam nec velit ex. Curabitur condimentum pellentesque enim, et convallis lectus pellentesque sed. Ut tristique quam id nisl aliquam, at maximus orci tincidunt. Quisque sollicitudin massa urna, nec laoreet magna bibendum vitae. Aenean vulputate diam nec aliquet tincidunt. ",
            'slug'=>"clanok-1",
            'user_id'=>"1"
            ]);
        DB::table('posts')->insert([
                'title'=>"clanok 2",
                'text'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum dapibus quam. Nullam consequat viverra sapien nec semper. Duis efficitur blandit bibendum. Nam nec velit ex. Curabitur condimentum pellentesque enim, et convallis lectus pellentesque sed. Ut tristique quam id nisl aliquam, at maximus orci tincidunt. Quisque sollicitudin massa urna, nec laoreet magna bibendum vitae. Aenean vulputate diam nec aliquet tincidunt. ",
                'slug'=>"clanok-2",
                'user_id'=>"1"
                ]);
        DB::table('posts')->insert([
                    'title'=>"clanok 3",
                    'text'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum dapibus quam. Nullam consequat viverra sapien nec semper. Duis efficitur blandit bibendum. Nam nec velit ex. Curabitur condimentum pellentesque enim, et convallis lectus pellentesque sed. Ut tristique quam id nisl aliquam, at maximus orci tincidunt. Quisque sollicitudin massa urna, nec laoreet magna bibendum vitae. Aenean vulputate diam nec aliquet tincidunt. ",
                    'slug'=>"clanok-3",
                    'user_id'=>"1"
                    ]);
        DB::table('posts')->insert([
        'title'=>"clanok 4",
        'text'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum dapibus quam. Nullam consequat viverra sapien nec semper. Duis efficitur blandit bibendum. Nam nec velit ex. Curabitur condimentum pellentesque enim, et convallis lectus pellentesque sed. Ut tristique quam id nisl aliquam, at maximus orci tincidunt. Quisque sollicitudin massa urna, nec laoreet magna bibendum vitae. Aenean vulputate diam nec aliquet tincidunt. ",
        'slug'=>"clanok-4",
        'user_id'=>"1"
                    ]);
        DB::table('posts')->insert([
        'title'=>"clanok 5",
        'text'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum dapibus quam. Nullam consequat viverra sapien nec semper. Duis efficitur blandit bibendum. Nam nec velit ex. Curabitur condimentum pellentesque enim, et convallis lectus pellentesque sed. Ut tristique quam id nisl aliquam, at maximus orci tincidunt. Quisque sollicitudin massa urna, nec laoreet magna bibendum vitae. Aenean vulputate diam nec aliquet tincidunt. ",
        'slug'=>"clanok-5",
        'user_id'=>"1"
                    ]);
    }
}
