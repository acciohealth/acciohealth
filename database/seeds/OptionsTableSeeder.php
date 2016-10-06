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
        //DASS 21 Questions
        $q1 = Question::where('id', 1)->first();
        $q2 = Question::where('id', 2)->first();
        $q3 = Question::where('id', 3)->first();
        $q4 = Question::where('id', 4)->first();
        $q5 = Question::where('id', 5)->first();
        $q6 = Question::where('id', 6)->first();
        $q7 = Question::where('id', 7)->first();
        $q8 = Question::where('id', 8)->first();
        $q9 = Question::where('id', 9)->first();
        $q10 = Question::where('id', 10)->first();
        $q11 = Question::where('id', 11)->first();
        $q12 = Question::where('id', 12)->first();
        $q13 = Question::where('id', 13)->first();
        $q14 = Question::where('id', 14)->first();
        $q15 = Question::where('id', 15)->first();
        $q16 = Question::where('id', 16)->first();
        $q17 = Question::where('id', 17)->first();
        $q18 = Question::where('id', 18)->first();
        $q19 = Question::where('id', 19)->first();
        $q20 = Question::where('id', 20)->first();
        $q21 = Question::where('id', 21)->first();


        //BAI questions
        $q22 = Question::where('id', 22)->first();
        $q23 = Question::where('id', 23)->first();
        $q24 = Question::where('id', 24)->first();
        $q25 = Question::where('id', 25)->first();
        $q26 = Question::where('id', 26)->first();
        $q27 = Question::where('id', 27)->first();
        $q28 = Question::where('id', 28)->first();
        $q29 = Question::where('id', 29)->first();
        $q30 = Question::where('id', 30)->first();
        $q31 = Question::where('id', 31)->first();
        $q32 = Question::where('id', 32)->first();
        $q33 = Question::where('id', 33)->first();
        $q34 = Question::where('id', 34)->first();
        $q35 = Question::where('id', 35)->first();
        $q36 = Question::where('id', 36)->first();
        $q37 = Question::where('id', 37)->first();
        $q38 = Question::where('id', 38)->first();
        $q39 = Question::where('id', 39)->first();
        $q40 = Question::where('id', 40)->first();
        $q41 = Question::where('id', 41)->first();
        $q42 = Question::where('id', 42)->first();

        //BDI questions
        $q43 = Question::where('id', 43)->first();
        $q44 = Question::where('id', 44)->first();
        $q45 = Question::where('id', 45)->first();
        $q46 = Question::where('id', 46)->first();
        $q47 = Question::where('id', 47)->first();
        $q48 = Question::where('id', 48)->first();
        $q49 = Question::where('id', 49)->first();
        $q50 = Question::where('id', 50)->first();
        $q51 = Question::where('id', 51)->first();
        $q52 = Question::where('id', 52)->first();
        $q53 = Question::where('id', 53)->first();
        $q54 = Question::where('id', 54)->first();
        $q55 = Question::where('id', 55)->first();
        $q56 = Question::where('id', 56)->first();
        $q57 = Question::where('id', 57)->first();
        $q58 = Question::where('id', 58)->first();
        $q59 = Question::where('id', 59)->first();
        $q60 = Question::where('id', 60)->first();
        $q61 = Question::where('id', 61)->first();
        $q62 = Question::where('id', 62)->first();
        $q63 = Question::where('id', 63)->first();

        //DASS options
        $op1 = new Option;
        $op1->description = "Did not apply to me at all - NEVER";
        $op1->score = 0;
        $op1->save();
        $op1->questions()->attach($q1);
        $op1->questions()->attach($q2);
        $op1->questions()->attach($q3);
        $op1->questions()->attach($q4);
        $op1->questions()->attach($q5);
        $op1->questions()->attach($q6);
        $op1->questions()->attach($q7);
        $op1->questions()->attach($q8);
        $op1->questions()->attach($q9);
        $op1->questions()->attach($q10);
        $op1->questions()->attach($q11);
        $op1->questions()->attach($q12);
        $op1->questions()->attach($q13);
        $op1->questions()->attach($q14);
        $op1->questions()->attach($q15);
        $op1->questions()->attach($q16);
        $op1->questions()->attach($q17);
        $op1->questions()->attach($q18);
        $op1->questions()->attach($q19);
        $op1->questions()->attach($q20);
        $op1->questions()->attach($q21);


        $op2 = new Option;
        $op2->description = "Applied to me to some degree, or some of the time – SOMETIMES";
        $op2->score = 1;
        $op2->save();
        $op2->questions()->attach($q1);
        $op2->questions()->attach($q2);
        $op2->questions()->attach($q3);
        $op2->questions()->attach($q4);
        $op2->questions()->attach($q5);
        $op2->questions()->attach($q6);
        $op2->questions()->attach($q7);
        $op2->questions()->attach($q8);
        $op2->questions()->attach($q9);
        $op2->questions()->attach($q10);
        $op2->questions()->attach($q11);
        $op2->questions()->attach($q12);
        $op2->questions()->attach($q13);
        $op2->questions()->attach($q14);
        $op2->questions()->attach($q15);
        $op2->questions()->attach($q16);
        $op2->questions()->attach($q17);
        $op2->questions()->attach($q18);
        $op2->questions()->attach($q19);
        $op2->questions()->attach($q20);
        $op2->questions()->attach($q21);

        $op3 = new Option;
        $op3->description = "Applied to me to a considerable degree, or a good part of time – OFTEN";
        $op3->score = 2;
        $op3->save();
        $op3->questions()->attach($q1);
        $op3->questions()->attach($q2);
        $op3->questions()->attach($q3);
        $op3->questions()->attach($q4);
        $op3->questions()->attach($q5);
        $op3->questions()->attach($q6);
        $op3->questions()->attach($q7);
        $op3->questions()->attach($q8);
        $op3->questions()->attach($q9);
        $op3->questions()->attach($q10);
        $op3->questions()->attach($q11);
        $op3->questions()->attach($q12);
        $op3->questions()->attach($q13);
        $op3->questions()->attach($q14);
        $op3->questions()->attach($q15);
        $op3->questions()->attach($q16);
        $op3->questions()->attach($q17);
        $op3->questions()->attach($q18);
        $op3->questions()->attach($q19);
        $op3->questions()->attach($q20);
        $op3->questions()->attach($q21);

        $op4 = new Option;
        $op4->description = "Applied to me very much, or most of the time - ALMOST ALWAYS";
        $op4->score = 3;
        $op4->save();
        $op4->questions()->attach($q1);
        $op4->questions()->attach($q2);
        $op4->questions()->attach($q3);
        $op4->questions()->attach($q4);
        $op4->questions()->attach($q5);
        $op4->questions()->attach($q6);
        $op4->questions()->attach($q7);
        $op4->questions()->attach($q8);
        $op4->questions()->attach($q9);
        $op4->questions()->attach($q10);
        $op4->questions()->attach($q11);
        $op4->questions()->attach($q12);
        $op4->questions()->attach($q13);
        $op4->questions()->attach($q14);
        $op4->questions()->attach($q15);
        $op4->questions()->attach($q16);
        $op4->questions()->attach($q17);
        $op4->questions()->attach($q18);
        $op4->questions()->attach($q19);
        $op4->questions()->attach($q20);
        $op4->questions()->attach($q21);


        //BAI options
        $op5 = new Option;
        $op5->description = "Not At All";
        $op5->score =0;
        $op5->save();
        $op5->questions()->attach($q22);
        $op5->questions()->attach($q23);
        $op5->questions()->attach($q24);
        $op5->questions()->attach($q25);
        $op5->questions()->attach($q26);
        $op5->questions()->attach($q27);
        $op5->questions()->attach($q28);
        $op5->questions()->attach($q29);
        $op5->questions()->attach($q30);
        $op5->questions()->attach($q31);
        $op5->questions()->attach($q32);
        $op5->questions()->attach($q33);
        $op5->questions()->attach($q34);
        $op5->questions()->attach($q35);
        $op5->questions()->attach($q36);
        $op5->questions()->attach($q37);
        $op5->questions()->attach($q38);
        $op5->questions()->attach($q39);
        $op5->questions()->attach($q40);
        $op5->questions()->attach($q41);
        $op5->questions()->attach($q42);

        $op6 = new Option;
        $op6->description = "Mildly - but it didn’t bother me much";
        $op6->score =1;
        $op6->save();
        $op6->questions()->attach($q22);
        $op6->questions()->attach($q23);
        $op6->questions()->attach($q24);
        $op6->questions()->attach($q25);
        $op6->questions()->attach($q26);
        $op6->questions()->attach($q27);
        $op6->questions()->attach($q28);
        $op6->questions()->attach($q29);
        $op6->questions()->attach($q30);
        $op6->questions()->attach($q31);
        $op6->questions()->attach($q32);
        $op6->questions()->attach($q33);
        $op6->questions()->attach($q34);
        $op6->questions()->attach($q35);
        $op6->questions()->attach($q36);
        $op6->questions()->attach($q37);
        $op6->questions()->attach($q38);
        $op6->questions()->attach($q39);
        $op6->questions()->attach($q40);
        $op6->questions()->attach($q41);
        $op6->questions()->attach($q42);

        $op7 = new Option;
        $op7->description = "Moderately - it wasn’t pleasant at times";
        $op7->score =2;
        $op7->save();
        $op7->questions()->attach($q22);
        $op7->questions()->attach($q23);
        $op7->questions()->attach($q24);
        $op7->questions()->attach($q25);
        $op7->questions()->attach($q26);
        $op7->questions()->attach($q27);
        $op7->questions()->attach($q28);
        $op7->questions()->attach($q29);
        $op7->questions()->attach($q30);
        $op7->questions()->attach($q31);
        $op7->questions()->attach($q32);
        $op7->questions()->attach($q33);
        $op7->questions()->attach($q34);
        $op7->questions()->attach($q35);
        $op7->questions()->attach($q36);
        $op7->questions()->attach($q37);
        $op7->questions()->attach($q38);
        $op7->questions()->attach($q39);
        $op7->questions()->attach($q40);
        $op7->questions()->attach($q41);
        $op7->questions()->attach($q42);

        $op8 = new Option;
        $op8->description = "Severely – it bothered me a lot";
        $op8->score =3;
        $op8->save();
        $op8->questions()->attach($q22);
        $op8->questions()->attach($q23);
        $op8->questions()->attach($q24);
        $op8->questions()->attach($q25);
        $op8->questions()->attach($q26);
        $op8->questions()->attach($q27);
        $op8->questions()->attach($q28);
        $op8->questions()->attach($q29);
        $op8->questions()->attach($q30);
        $op8->questions()->attach($q31);
        $op8->questions()->attach($q32);
        $op8->questions()->attach($q33);
        $op8->questions()->attach($q34);
        $op8->questions()->attach($q35);
        $op8->questions()->attach($q36);
        $op8->questions()->attach($q37);
        $op8->questions()->attach($q38);
        $op8->questions()->attach($q39);
        $op8->questions()->attach($q40);
        $op8->questions()->attach($q41);
        $op8->questions()->attach($q42);

        //BDI options
        /// q1 options
        $op9 = new Option;
        $op9->description = "I do not feel sad";
        $op9->score =0;
        $op9->save();
        $op9->questions()->attach($q43);

        $op10 = new Option;
        $op10->description = "I feel sad most of the time";
        $op10->score =1;
        $op10->save();
        $op10->questions()->attach($q43);

        $op11 = new Option;
        $op11->description = "I am sad all the time";
        $op11->score =2;
        $op11->save();
        $op11->questions()->attach($q43);

        $op12 = new Option;
        $op12->description = "I am so sad or unhappy that i cant stand it";
        $op12->score =3;
        $op12->save();
        $op12->questions()->attach($q43);

        // q2 options
        $op13 = new Option;
        $op13->description = "I am not discouraged about my future";
        $op13->score =0;
        $op13->save();
        $op13->questions()->attach($q44);

        $op14 = new Option;
        $op14->description = "I feel more discouraged about my future than I used to be";
        $op14->score =1;
        $op14->save();
        $op14->questions()->attach($q44);

        $op15 = new Option;
        $op15->description = "I do not expect things to work out for me";
        $op15->score =2;
        $op15->save();
        $op15->questions()->attach($q44);

        $op16 = new Option;
        $op16->description = "I feel my future is hopeless and will only get worse";
        $op16->score =3;
        $op16->save();
        $op16->questions()->attach($q44);

        // q3 options
        $op17 = new Option;
        $op17->description = "I do not feel like failure";
        $op17->score =0;
        $op17->save();
        $op17->questions()->attach($q45);

        $op18 = new Option;
        $op18->description = "I have failed more than I should have";
        $op18->score =1;
        $op18->save();
        $op18->questions()->attach($q45);

        $op19 = new Option;
        $op19->description = "As I look back, I see a lot of failures";
        $op19->score =2;
        $op19->save();
        $op19->questions()->attach($q45);

        $op20 = new Option;
        $op20->description = "I feel I am total failure as a person";
        $op20->score =3;
        $op20->save();
        $op20->questions()->attach($q45);

        // q4 options
        $op21 = new Option;
        $op21->description = "I get as much pleasure as I ever did from the things I enjoy";
        $op21->score =0;
        $op21->save();
        $op21->questions()->attach($q46);

        $op22 = new Option;
        $op22->description = "I don't enjoy things as much as i used to";
        $op22->score =1;
        $op22->save();
        $op22->questions()->attach($q46);

        $op23 = new Option;
        $op23->description = "I get very little pleasure from the things I used to enjoy";
        $op23->score =2;
        $op23->save();
        $op23->questions()->attach($q46);

        $op24 = new Option;
        $op24->description = "I can't get any pleasure from the things I used to enjoy";
        $op24->score =3;
        $op24->save();
        $op24->questions()->attach($q46);

        // q5 options
        $op25 = new Option;
        $op25->description = "I don't particularly feel guilty";
        $op25->score =0;
        $op25->save();
        $op25->questions()->attach($q47);

        $op26 = new Option;
        $op26->description = "I feel guilty over many things I have done or should have done";
        $op26->score =1;
        $op26->save();
        $op26->questions()->attach($q47);

        $op27 = new Option;
        $op27->description = "I feel quite guilty most of the time";
        $op27->score =2;
        $op27->save();
        $op27->questions()->attach($q47);

        $op28 = new Option;
        $op28->description = "I feel guilty all of the time";
        $op28->score =3;
        $op28->save();
        $op28->questions()->attach($q47);

        // q6 options
        $op29 = new Option;
        $op29->description = "I don't feel I am being punished";
        $op29->score =0;
        $op29->save();
        $op29->questions()->attach($q48);

        $op30 = new Option;
        $op30->description = "I feel I may be punished";
        $op30->score =1;
        $op30->save();
        $op30->questions()->attach($q48);

        $op31 = new Option;
        $op31->description = "I expect to be punished";
        $op31->score =2;
        $op31->save();
        $op31->questions()->attach($q48);

        $op32 = new Option;
        $op32->description = "I feel I am being punished";
        $op32->score =3;
        $op32->save();
        $op32->questions()->attach($q48);

        // q7 options
        $op33 = new Option;
        $op33->description = "I feel the same about myself as ever";
        $op33->score =0;
        $op33->save();
        $op33->questions()->attach($q49);

        $op34 = new Option;
        $op34->description = "I have lost confidence in myself";
        $op34->score =1;
        $op34->save();
        $op34->questions()->attach($q49);

        $op35 = new Option;
        $op35->description = "I am disappointed in myself";
        $op35->score =2;
        $op35->save();
        $op35->questions()->attach($q49);

        $op36 = new Option;
        $op36->description = "I disklike myself";
        $op36->score =3;
        $op36->save();
        $op36->questions()->attach($q49);

        // q8 options
        $op37 = new Option;
        $op37->description = "I don't criticize or blame myself more than usual";
        $op37->score =0;
        $op37->save();
        $op37->questions()->attach($q50);

        $op38 = new Option;
        $op38->description = "I am more critical of myself than i used to be";
        $op38->score =1;
        $op38->save();
        $op38->questions()->attach($q50);

        $op39 = new Option;
        $op39->description = "I criticize myself for all of my faults";
        $op39->score =2;
        $op39->save();
        $op39->questions()->attach($q50);

        $op40 = new Option;
        $op40->description = "I blame myself for everything bad that happens";
        $op40->score =3;
        $op40->save();
        $op40->questions()->attach($q50);

        // q9 options
        $op41 = new Option;
        $op41->description = "I don't have any thoughts of killing myself";
        $op41->score =0;
        $op41->save();
        $op41->questions()->attach($q51);

        $op42 = new Option;
        $op42->description = "I have thoughts of killing myself, but I would not carry them out";
        $op42->score =1;
        $op42->save();
        $op42->questions()->attach($q51);

        $op43 = new Option;
        $op43->description = "I would like to kill myself";
        $op43->score =2;
        $op43->save();
        $op43->questions()->attach($q51);

        $op44 = new Option;
        $op44->description = "I would kill myself if I had the chance";
        $op44->score =3;
        $op44->save();
        $op44->questions()->attach($q51);

        // q10 options
        $op45 = new Option;
        $op45->description = "I don't cry anymore than I used to";
        $op45->score =0;
        $op45->save();
        $op45->questions()->attach($q52);

        $op46 = new Option;
        $op46->description = "I cry more than I used to";
        $op46->score =1;
        $op46->save();
        $op46->questions()->attach($q52);

        $op47 = new Option;
        $op47->description = "I cry over every little thing";
        $op47->score =2;
        $op47->save();
        $op47->questions()->attach($q52);

        $op48 = new Option;
        $op48->description = "I feel like crying, but I can't";
        $op48->score =3;
        $op48->save();
        $op48->questions()->attach($q52);

        /// q11 options
        $op49 = new Option;
        $op49->description = "I am no more restless or wound up than usual";
        $op49->score =0;
        $op49->save();
        $op49->questions()->attach($q53);

        $op50 = new Option;
        $op50->description = "I feel more restless or wound up than usual";
        $op50->score =1;
        $op50->save();
        $op50->questions()->attach($q53);

        $op51 = new Option;
        $op51->description = "I am so restless or agitated that it's hard to stay still";
        $op51->score =2;
        $op51->save();
        $op51->questions()->attach($q53);

        $op52 = new Option;
        $op52->description = "I am so restless or agitated that I have to keep moving or do something ";
        $op52->score =3;
        $op52->save();
        $op52->questions()->attach($q53);

        // q12 options
        $op53 = new Option;
        $op53->description = "I have not lost interest in other people or activities";
        $op53->score =0;
        $op53->save();
        $op53->questions()->attach($q54);

        $op54 = new Option;
        $op54->description = "I am less interested in other people or things than before";
        $op54->score =1;
        $op54->save();
        $op54->questions()->attach($q54);

        $op55 = new Option;
        $op55->description = "I have lost most of my interest in other people or things";
        $op55->score =2;
        $op55->save();
        $op55->questions()->attach($q54);

        $op56 = new Option;
        $op56->description = "It's hard to get interested in anything";
        $op56->score =3;
        $op56->save();
        $op56->questions()->attach($q54);

        // q13 options
        $op57 = new Option;
        $op57->description = "I make decisions about as well as ever";
        $op57->score =0;
        $op57->save();
        $op57->questions()->attach($q55);

        $op58 = new Option;
        $op58->description = "I find it more difficult to make decisions than usual";
        $op58->score =1;
        $op58->save();
        $op58->questions()->attach($q55);

        $op59 = new Option;
        $op59->description = "I have much greater difficulty in making decisions than I used to";
        $op59->score =2;
        $op59->save();
        $op59->questions()->attach($q55);

        $op60 = new Option;
        $op60->description = "I have trouble making any decisions";
        $op60->score =3;
        $op60->save();
        $op60->questions()->attach($q55);

        // q14 options
        $op61 = new Option;
        $op61->description = "I do not feel I am worthless";
        $op61->score =0;
        $op61->save();
        $op61->questions()->attach($q56);

        $op62 = new Option;
        $op62->description = "I don't consider myself as worthwhile and useful as I used to";
        $op62->score =1;
        $op62->save();
        $op62->questions()->attach($q56);

        $op63 = new Option;
        $op63->description = "I feel more worthless as compared to other people";
        $op63->score =2;
        $op63->save();
        $op63->questions()->attach($q56);

        $op64 = new Option;
        $op64->description = "I feel utterly worthless";
        $op64->score =3;
        $op64->save();
        $op64->questions()->attach($q56);

        // q15 options
        $op65 = new Option;
        $op65->description = "I have as much energy as ever";
        $op65->score =0;
        $op65->save();
        $op65->questions()->attach($q57);

        $op66 = new Option;
        $op66->description = "I have less energy than I used to have";
        $op66->score =1;
        $op66->save();
        $op66->questions()->attach($q57);

        $op67 = new Option;
        $op67->description = "I don't have enough energy to do very much";
        $op67->score =2;
        $op67->save();
        $op67->questions()->attach($q57);

        $op68 = new Option;
        $op68->description = "I don't have enough energy to do anything";
        $op68->score =3;
        $op68->save();
        $op68->questions()->attach($q57);

        // q16 options
        $op69 = new Option;
        $op69->description = "I have not experienced any change in my sleeping pattern";
        $op69->score =0;
        $op69->save();
        $op69->questions()->attach($q58);

        $op70 = new Option;
        $op70->description = "I sleep somewhat more than usual";
        $op70->score =1;
        $op70->save();
        $op70->questions()->attach($q58);

        $op71 = new Option;
        $op71->description = "I sleep a lot more than usual";
        $op71->score =2;
        $op71->save();
        $op71->questions()->attach($q58);

        $op72 = new Option;
        $op72->description = "I sleep most of the day";
        $op72->score =3;
        $op72->save();
        $op72->questions()->attach($q58);

        // q17 options
        $op73 = new Option;
        $op73->description = "I am no more irritable than usual";
        $op73->score =0;
        $op73->save();
        $op73->questions()->attach($q59);

        $op74 = new Option;
        $op74->description = "I am more irritable than usual";
        $op74->score =1;
        $op74->save();
        $op74->questions()->attach($q59);

        $op75 = new Option;
        $op75->description = "I am much more irritable than usual";
        $op75->score =2;
        $op75->save();
        $op75->questions()->attach($q59);

        $op76 = new Option;
        $op76->description = "I am irritable all the time";
        $op76->score =3;
        $op76->save();
        $op76->questions()->attach($q59);

        // q18 options
        $op77 = new Option;
        $op77->description = "I have not experienced any change in any appetite";
        $op77->score =0;
        $op77->save();
        $op77->questions()->attach($q60);

        $op78 = new Option;
        $op78->description = "My appetite is somewhat less than usual";
        $op78->score =1;
        $op78->save();
        $op78->questions()->attach($q60);

        $op79 = new Option;
        $op79->description = "My appetite is much less than before";
        $op79->score =2;
        $op79->save();
        $op79->questions()->attach($q60);

        $op80 = new Option;
        $op80->description = "I have no appetite at all";
        $op80->score =3;
        $op80->save();
        $op80->questions()->attach($q60);

        // q19 options
        $op81 = new Option;
        $op81->description = "I can concentrate as well as ever";
        $op81->score =0;
        $op81->save();
        $op81->questions()->attach($q61);

        $op82 = new Option;
        $op82->description = "I can't concentrate as well as usual";
        $op82->score =1;
        $op82->save();
        $op82->questions()->attach($q61);

        $op83 = new Option;
        $op83->description = "Its hard to keep my mind on anything for very long";
        $op83->score =2;
        $op83->save();
        $op83->questions()->attach($q61);

        $op84 = new Option;
        $op84->description = "I find I can't concentrate on anything";
        $op84->score =3;
        $op84->save();
        $op84->questions()->attach($q61);

        // q20 options
        $op85 = new Option;
        $op85->description = "I am no more tired or fatigued than usual";
        $op85->score =0;
        $op85->save();
        $op85->questions()->attach($q62);

        $op86 = new Option;
        $op86->description = "I get more tired or fatigued more easily than usual";
        $op86->score =1;
        $op86->save();
        $op86->questions()->attach($q62);

        $op87 = new Option;
        $op87->description = "I am too tired or fatigued to do a lot of the things I used to do";
        $op87->score =2;
        $op87->save();
        $op87->questions()->attach($q62);

        $op88 = new Option;
        $op88->description = "I am too tired or fatigued to do most of the things I used to do";
        $op88->score =3;
        $op88->save();
        $op88->questions()->attach($q62);

        // q21 options
        $op86 = new Option;
        $op86->description = "I have not noticed any recent change in my interest in sex";
        $op86->score =0;
        $op86->save();
        $op86->questions()->attach($q63);

        $op87 = new Option;
        $op87->description = "I am less interested in sex than I used to be";
        $op87->score =1;
        $op87->save();
        $op87->questions()->attach($q63);

        $op88 = new Option;
        $op88->description = "I am much less interested in sex now";
        $op88->score =2;
        $op88->save();
        $op88->questions()->attach($q63);

        $op89 = new Option;
        $op89->description = "I have lost interest in sex completely";
        $op89->score =3;
        $op89->save();
        $op89->questions()->attach($q63);

    }
}
