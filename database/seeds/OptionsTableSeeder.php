<?php

use App\Option;
use App\Question;
use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DASS Questions
        $q1 = Question::where('id', 1)->first();
        $q2 = Question::where('id', 2)->first();
        //BAI questions
        $q3 = Question::where('id', 3)->first();
        $q4 = Question::where('id', 4)->first();
        //BDI questions
        $q5 = Question::where('id', 5)->first();
        $q6 = Question::where('id', 6)->first();

        //DASS options
        $op1 = new Option;
        $op1->description = "Did not apply to me at all - NEVER";
        $op1->score = 10;
        $op1->save();
        $op1->questions()->attach($q1);

        $op2 = new Option;
        $op2->description = "Applied to me to some degree, or some of the time – SOMETIMES";
        $op2->score = 20;
        $op2->save();
        $op2->questions()->attach($q1);
        $op2->questions()->attach($q2);

        $op3 = new Option;
        $op3->description = "Applied to me to a considerable degree, or a good part of time – OFTEN";
        $op3->score = 30;
        $op3->save();
        $op3->questions()->attach($q1);
        $op3->questions()->attach($q2);

        $op4 = new Option;
        $op4->description = "Applied to me very much, or most of the time - ALMOST ALWAYS";
        $op4->score = 40;
        $op4->save();
        $op4->questions()->attach($q1);
        $op4->questions()->attach($q2);
        $op1->questions()->attach($q2);


        //BAI options
        $op9 = new Option;
        $op9->description = "Not At All";
        $op9->score =10;
        $op9->save();
        $op9->questions()->attach($q3);
        $op9->questions()->attach($q4);

        $op10 = new Option;
        $op10->description = "Mildly - but it didn’t bother me much";
        $op10->score =20;
        $op10->save();
        $op10->questions()->attach($q3);
        $op10->questions()->attach($q4);

        $op11 = new Option;
        $op11->description = "Moderately - it wasn’t pleasant at times";
        $op11->score =30;
        $op11->save();
        $op11->questions()->attach($q3);
        $op11->questions()->attach($q4);

        $op12 = new Option;
        $op12->description = "Severely – it bothered me a lot";
        $op12->score =40;
        $op12->save();
        $op12->questions()->attach($q3);
        $op12->questions()->attach($q4);


        //BDI options
        $op13 = new Option;
        $op13->description = "I am not particularly discouraged about the future.";
        $op13->score =10;
        $op13->save();
        $op13->questions()->attach($q6);

        $op14 = new Option;
        $op14->description = "I feel discouraged about the future.";
        $op14->score =20;
        $op14->save();
        $op14->questions()->attach($q6);

        $op15 = new Option;
        $op15->description = "I feel I have nothing to look forward to.";
        $op15->score =30;
        $op15->save();
        $op15->questions()->attach($q6);

        $op16 = new Option;
        $op16->description = "I feel the future is hopeless and that things cannot improve.";
        $op16->score =40;
        $op16->save();
        $op16->questions()->attach($q6);

        $op17 = new Option;
        $op17->description = "I do not feel sad.";
        $op17->score =10;
        $op17->save();
        $op17->questions()->attach($q5);

        $op18 = new Option;
        $op18->description = "I feel sad";
        $op18->score =20;
        $op18->save();
        $op18->questions()->attach($q5);

        $op19 = new Option;
        $op19->description = "I am sad all the time and I can't snap out of it.";
        $op19->score =30;
        $op19->save();
        $op19->questions()->attach($q5);

        $op20 = new Option;
        $op20->description = "I am so sad and unhappy that I can't stand it.";
        $op20->score =40;
        $op20->save();
        $op20->questions()->attach($q5);


    }
}
