<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag(['name' => 'Development']);
        $tag->save();
        $tag = new Tag(['name' => 'Marketing']);
        $tag->save();
        $tag = new Tag(['name' => 'Design']);
        $tag->save();
        $tag = new Tag(['name' => 'Creatief']);
        $tag->save();
        $tag = new Tag(['name' => 'Rationeel']);
        $tag->save();
    }
}
