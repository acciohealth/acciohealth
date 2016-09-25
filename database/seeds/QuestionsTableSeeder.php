<?php

use App\Question;
use App\Test;
use App\Measure;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Depression
        $test1 = Test::where('id', 1)->first();
        //Anxiety
        $test2 = Test::where('id', 2)->first();
        //Stress
        $test3 = Test::where('id', 3)->first();

        $measure1 = Measure::where('id', 1)->first();
        $measure2 = Measure::where('id', 2)->first();
 
        //DAS questions
        $q1 = New Question;
        $q1->question = "I found it hard to wind down";
        $q1->test()->associate($test1);
        $q1->save();
        $q1->measures()->attach($measure1);

        $q2 = New Question;
        $q2->question = "I was aware of dryness of my mouth";
        $q2->test()->associate($test1);
        $q2->save();
        $q2->measures()->attach($measure1);

        //BAI questions
        $q3 = New Question;
        $q3->question = "Numbness or tingling";
        $q3->test()->associate($test2);
        $q3->save();
        $q3->measures()->attach($measure2);

        $q4 = New Question;
        $q4->question = "Feeling hot";
        $q4->test()->associate($test2);
        $q4->save();
        $q4->measures()->attach($measure2);

        //BDI
        $q5 = New Question;
        $q5->question = "Sadness";
        $q5->test()->associate($test3);
        $q5->save();
        $q5->measures()->attach($measure1);

        $q6 = New Question;
        $q6->question = "Pessimism";
        $q6->test()->associate($test3);
        $q6->save();
        $q6->measures()->attach($measure1);

    }
}
