<?php

use App\Measure;
use Illuminate\Database\Seeder;

class MeasuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $measure1 = New Measure;
        $measure1->name = 'Depression';
        $measure1->save();

        $measure2 = New Measure;
        $measure2->name = 'Anxiety';
        $measure2->save();

        $measure3 = New Measure;
        $measure3->name = 'Stress';
        $measure3->save();
    }
}
