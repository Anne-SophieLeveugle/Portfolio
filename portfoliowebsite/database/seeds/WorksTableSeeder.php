<?php

use App\Work;
use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $werk = new Work([
            'title' => 'Cornet',
            'content' => 'Een cornet is een cornet en blablabla'
        ]);
        $werk->save();
        $werk = new Work([
            'title' => 'Trompet',
            'content' => 'Een trompet is een cornet en blablabla'
        ]);
        $werk->save();
        $werk = new Work([
            'title' => 'Gitaar',
            'content' => 'Een gitaar is een cornet en blablabla'
        ]);
        $werk->save();
        $werk = new Work([
            'title' => 'Viool',
            'content' => 'Een viool is een cornet en blablabla'
        ]);
        $werk->save();
        $werk = new Work([
            'title' => 'Euphonium',
            'content' => 'Een euphonium is een cornet en blablabla'
        ]);
        $werk->save();
    }
}
