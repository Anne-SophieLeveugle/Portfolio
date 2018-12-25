<?php

use App\Image;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Image(['imagepath' => 'images/werkenimages/rens.png', 'work_id' => 1]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/rens1.png', 'work_id' => 1]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/rens2.png', 'work_id' => 1]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/rens3.png', 'work_id' => 1]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/smmr.png', 'work_id' => 2]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/smmr1.png', 'work_id' => 2]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/smmr2.png', 'work_id' => 2]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/smmr3.png', 'work_id' => 2]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/refugee.png', 'work_id' => 3]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/refugee1.png', 'work_id' => 3]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/refugee2.png', 'work_id' => 3]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/linear.png', 'work_id' => 4]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/soep.png', 'work_id' => 5]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/dehel.png', 'work_id' => 6]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/dehel1.png', 'work_id' => 6]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/dehel2.png', 'work_id' => 6]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/dehel3.png', 'work_id' => 6]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/delta.png', 'work_id' => 7]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/delta1.png', 'work_id' => 7]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/delta2.png', 'work_id' => 7]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/delta3.png', 'work_id' => 7]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/kbjem.png', 'work_id' => 8]);
        $tag->save();
        $tag = new Image(['imagepath' => 'images/werkenimages/kbjem1.png', 'work_id' => 8]);
        $tag->save();
    }
}
