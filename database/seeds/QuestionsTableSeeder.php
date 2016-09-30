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
        //DASS 21
        $test1 = Test::where('id', 1)->first();
        //BAI
        $test2 = Test::where('id', 2)->first();
        //BDI
        $test3 = Test::where('id', 3)->first();

        //Depression
        $measure1 = Measure::where('id', 1)->first();
        //Anxiety
        $measure2 = Measure::where('id', 2)->first();
        //Stress
        $measure3 = Measure::where('id', 3)->first();
 
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

        $q3 = New Question;
        $q3->question = "I couldn’t seem to experience any positive feeling at all";
        $q3->test()->associate($test1);
        $q3->save();
        $q3->measures()->attach($measure1);

        $q4 = New Question;
        $q4->question = "I experienced breathing difficulty (eg, excessively rapid breathing, breathlessness in the absence of physical exertion)";
        $q4->test()->associate($test1);
        $q4->save();
        $q4->measures()->attach($measure1);

        $q5 = New Question;
        $q5->question = "I found it difficult to work up the initiative to do things";
        $q5->test()->associate($test1);
        $q5->save();
        $q5->measures()->attach($measure1);

        $q6 = New Question;
        $q6->question = "I tended to over-react to situations";
        $q6->test()->associate($test1);
        $q6->save();
        $q6->measures()->attach($measure1);

        $q7 = New Question;
        $q7->question = "I experienced trembling (eg, in the hands)";
        $q7->test()->associate($test1);
        $q7->save();
        $q7->measures()->attach($measure1);

        $q8 = New Question;
        $q8->question = "I felt that I was using a lot of nervous energy";
        $q8->test()->associate($test1);
        $q8->save();
        $q8->measures()->attach($measure1);

        $q9 = New Question;
        $q9->question = "I was worried about situationsin which I might panic and make a fool of myself";
        $q9->test()->associate($test1);
        $q9->save();
        $q9->measures()->attach($measure1);

        $q10 = New Question;
        $q10->question = "I felt that I had nothing to look forward to";
        $q10->test()->associate($test1);
        $q10->save();
        $q10->measures()->attach($measure1);

        $q11 = New Question;
        $q11->question = "I found myself getting agitated";
        $q11->test()->associate($test1);
        $q11->save();
        $q11->measures()->attach($measure1);

        $q12 = New Question;
        $q12->question = "I found it difficult to relax";
        $q12->test()->associate($test1);
        $q12->save();
        $q12->measures()->attach($measure1);

        $q13 = New Question;
        $q13->question = "I felt down-hearted and blue";
        $q13->test()->associate($test1);
        $q13->save();
        $q13->measures()->attach($measure1);

        $q14 = New Question;
        $q14->question = "I was intolerant of anything that kept me from getting on with what I was doing";
        $q14->test()->associate($test1);
        $q14->save();
        $q14->measures()->attach($measure1);

        $q15 = New Question;
        $q15->question = "I felt I was close to panic";
        $q15->test()->associate($test1);
        $q15->save();
        $q15->measures()->attach($measure1);

        $q16 = New Question;
        $q16->question = "I was unable to become enthusiastic about anything";
        $q16->test()->associate($test1);
        $q16->save();
        $q16->measures()->attach($measure1);

        $q17 = New Question;
        $q17->question = "I felt I wasn’t worth much as a person";
        $q17->test()->associate($test1);
        $q17->save();
        $q17->measures()->attach($measure1);

        $q18 = New Question;
        $q18->question = "I felt that I was rather touchy";
        $q18->test()->associate($test1);
        $q18->save();
        $q18->measures()->attach($measure1);

        $q19 = New Question;
        $q19->question = "I was aware of the action of my heart in the absence of physicalexertion (eg, sense of heart rate increase, heart missing a beat)";
        $q19->test()->associate($test1);
        $q19->save();
        $q19->measures()->attach($measure1);

        $q20 = New Question;
        $q20->question = "I felt scared without any good reason";
        $q20->test()->associate($test1);
        $q20->save();
        $q20->measures()->attach($measure1);

        $q21 = New Question;
        $q21->question = "I felt that life was meaningless";
        $q21->test()->associate($test1);
        $q21->save();
        $q21->measures()->attach($measure1);

        //BAI questions
        $q22 = New Question;
        $q22->question = "Numbness or tingling";
        $q22->test()->associate($test2);
        $q22->save();
        $q22->measures()->attach($measure2);

        $q23 = New Question;
        $q23->question = "Feeling hot";
        $q23->test()->associate($test2);
        $q23->save();
        $q23->measures()->attach($measure2);

        $q24 = New Question;
        $q24->question = "Wobbliness in legs";
        $q24->test()->associate($test2);
        $q24->save();
        $q24->measures()->attach($measure2);

        $q25 = New Question;
        $q25->question = "Unable to relax";
        $q25->test()->associate($test2);
        $q25->save();
        $q25->measures()->attach($measure2);

        $q26 = New Question;
        $q26->question = "Fear of worst happening";
        $q26->test()->associate($test2);
        $q26->save();
        $q26->measures()->attach($measure2);

        $q27 = New Question;
        $q27->question = "Dizzy or lightheaded";
        $q27->test()->associate($test2);
        $q27->save();
        $q27->measures()->attach($measure2);

        $q28 = New Question;
        $q28->question = "Heart pounding/racing";
        $q28->test()->associate($test2);
        $q28->save();
        $q28->measures()->attach($measure2);

        $q29 = New Question;
        $q29->question = "Unsteady";
        $q29->test()->associate($test2);
        $q29->save();
        $q29->measures()->attach($measure2);

        $q30 = New Question;
        $q30->question = "Terrified or afraid";
        $q30->test()->associate($test2);
        $q30->save();
        $q30->measures()->attach($measure2);

        $q31 = New Question;
        $q31->question = "Nervous";
        $q31->test()->associate($test2);
        $q31->save();
        $q31->measures()->attach($measure2);

        $q42 = New Question;
        $q42->question = "Feeling of choking";
        $q42->test()->associate($test2);
        $q42->save();
        $q42->measures()->attach($measure2);

        $q32 = New Question;
        $q32->question = "Hands trembling";
        $q32->test()->associate($test2);
        $q32->save();
        $q32->measures()->attach($measure2);

        $q33 = New Question;
        $q33->question = "Shaky / unsteady";
        $q33->test()->associate($test2);
        $q33->save();
        $q33->measures()->attach($measure2);

        $q34 = New Question;
        $q34->question = "Fear of losing control";
        $q34->test()->associate($test2);
        $q34->save();
        $q34->measures()->attach($measure2);

        $q35 = New Question;
        $q35->question = "Difficulty in breathing";
        $q35->test()->associate($test2);
        $q35->save();
        $q35->measures()->attach($measure2);

        $q36 = New Question;
        $q36->question = "Fear of dying";
        $q36->test()->associate($test2);
        $q36->save();
        $q36->measures()->attach($measure2);

        $q37 = New Question;
        $q37->question = "Scared";
        $q37->test()->associate($test2);
        $q37->save();
        $q37->measures()->attach($measure2);

        $q38 = New Question;
        $q38->question = "Indigestion";
        $q38->test()->associate($test2);
        $q38->save();
        $q38->measures()->attach($measure2);

        $q39 = New Question;
        $q39->question = "Faint / lightheaded";
        $q39->test()->associate($test2);
        $q39->save();
        $q39->measures()->attach($measure2);

        $q40 = New Question;
        $q40->question = "Face flushed";
        $q40->test()->associate($test2);
        $q40->save();
        $q40->measures()->attach($measure2);

        $q41 = New Question;
        $q41->question = "Hot/cold sweats";
        $q41->test()->associate($test2);
        $q41->save();
        $q41->measures()->attach($measure2);

        //BDI questions
        $q43 = New Question;
        $q43->question = "Sadness";
        $q43->test()->associate($test3);
        $q43->save();
        $q43->measures()->attach($measure3);

        $q44 = New Question;
        $q44->question = "Pessimism";
        $q44->test()->associate($test3);
        $q44->save();
        $q44->measures()->attach($measure3);

        $q45 = New Question;
        $q45->question = "Past failure";
        $q45->test()->associate($test3);
        $q45->save();
        $q45->measures()->attach($measure3);

        $q46 = New Question;
        $q46->question = "Loss of pleasure";
        $q46->test()->associate($test3);
        $q46->save();
        $q46->measures()->attach($measure3);

        $q47 = New Question;
        $q47->question = "Guilty feelings";
        $q47->test()->associate($test3);
        $q47->save();
        $q47->measures()->attach($measure3);

        $q48 = New Question;
        $q48->question = "Punishment feelings";
        $q48->test()->associate($test3);
        $q48->save();
        $q48->measures()->attach($measure3);

        $q49 = New Question;
        $q49->question = "Self-dislike";
        $q49->test()->associate($test3);
        $q49->save();
        $q49->measures()->attach($measure3);

        $q50 = New Question;
        $q50->question = "Self-criticalness";
        $q50->test()->associate($test3);
        $q50->save();
        $q50->measures()->attach($measure3);

        $q51 = New Question;
        $q51->question = "Suicidal thoughts or wishes";
        $q51->test()->associate($test3);
        $q51->save();
        $q51->measures()->attach($measure3);

        $q52 = New Question;
        $q52->question = "Crying";
        $q52->test()->associate($test3);
        $q52->save();
        $q52->measures()->attach($measure3);

        $q53 = New Question;
        $q53->question = "Agitation";
        $q53->test()->associate($test3);
        $q53->save();
        $q53->measures()->attach($measure3);

        $q54 = New Question;
        $q54->question = "Loss of Interest";
        $q54->test()->associate($test3);
        $q54->save();
        $q54->measures()->attach($measure3);

        $q55 = New Question;
        $q55->question = "Indecisiveness";
        $q55->test()->associate($test3);
        $q55->save();
        $q55->measures()->attach($measure3);

        $q56 = New Question;
        $q56->question = "Worthlessness";
        $q56->test()->associate($test3);
        $q56->save();
        $q56->measures()->attach($measure3);

        $q57 = New Question;
        $q57->question = "Loss of energy";
        $q57->test()->associate($test3);
        $q57->save();
        $q57->measures()->attach($measure3);

        $q58 = New Question;
        $q58->question = "Changes in sleeping pattern";
        $q58->test()->associate($test3);
        $q58->save();
        $q58->measures()->attach($measure3);

        $q59 = New Question;
        $q59->question = "Irritability";
        $q59->test()->associate($test3);
        $q59->save();
        $q59->measures()->attach($measure3);

        $q60 = New Question;
        $q60->question = "Changes in appetite";
        $q60->test()->associate($test3);
        $q60->save();
        $q60->measures()->attach($measure3);

        $q61 = New Question;
        $q61->question = "Concentration difficulty";
        $q61->test()->associate($test3);
        $q61->save();
        $q61->measures()->attach($measure3);

        $q62 = New Question;
        $q62->question = "Tiredness or Fatigue";
        $q62->test()->associate($test3);
        $q62->save();
        $q62->measures()->attach($measure3);

        $q63 = New Question;
        $q63->question = "Loss of intereset in sex";
        $q63->test()->associate($test3);
        $q63->save();
        $q63->measures()->attach($measure3);

    }
}
