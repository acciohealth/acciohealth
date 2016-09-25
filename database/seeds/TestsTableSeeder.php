<?php

use Illuminate\Database\Seeder;
use App\Test;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $test1 = New Test;
        $test1->name = 'Dass 21';
        $test1->description = 'Test yourself for Chronic Stress, Anxiety or Depression. Stress is known to cause heart ailments, a weakened immune system, obesity, sleep disorders, chronic pain, irritable bowel syndrome and poor concentration. Stress is also the starting point for anxiety and depression. ';
        $test1->image = 'img/test1.png';
        $test1->save();

        $test2 = New Test;
        $test2->name = 'Beck Anxiety Inventory';
        $test2->description = 'Test yourself for  Anxiety, which is causes heart and endocrine ailments, fears and phobias, anxiety or panic attacks, disturbed sleep, self doubt and muscle spasms. Take this test to find out more.';
        $test2->image = 'img/test2.png';
        $test2->save();

        $test3 = New Test;
        $test3->name = 'Beck Depression Inventory';
        $test3->description = 'Test yourself for Depression, which causes feelings of hopelessness, devaluing own lives, self doubt and elevated risk of obesity, diabetes and heart ailments. Depression affects over 350 million worldwide, and most of them either suffer in silence or choose to end their lives. Take this test to know more.';
        $test3->image = 'img/test3.png';
        $test3->save();

    }
}
